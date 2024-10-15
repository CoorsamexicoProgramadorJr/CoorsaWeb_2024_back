<?php

namespace App\Http\Controllers;

use App\Models\Vacancy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class VacancyController extends Controller
{
    //
    public function index()
    {
        $vacancies = DB::table('vacancies')->orderBy('status', 'desc')->get();

        return response()->json([
            'data' => $vacancies,
            'status' => 200
        ]);
    }

    public function show($id)
    {
        $vacancy = Vacancy::find($id);

        if(!$vacancy){
            return response()->json([
                'message' => 'Vacancy not found.',
                'status' => 404
            ], 404);
        }

        // return $vacancy->category;

        return response()->json([
            'data' => $vacancy,
            'status' => 200
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'position' => 'required|string|max:150',
            'location' => 'required|string|max:150',
            'description' => 'required|string',
            'schedule' => 'required|string|max:255',
            'requirements' => 'required|string',
            'user_id' => 'required|integer|integer|numeric|gt:0',
            'category_id' => 'required|integer|integer|numeric|gt:0'
        ]);

        if($validator->fails()){
            return response()->json([
                'message' => 'Invalid data',
                'errors' => $validator->errors(),
                'status' => 400
            ], 400);
        }

        $vacancy = Vacancy::create($request->all());
        
        return response()->json([
            'message' => 'Vacancy created successfully.',
            'data' => $vacancy,
            'status' => 200
        ]);
    }

    public function update(Request $request, $id)
    {
        $vacancy = Vacancy::find($id);
        
        if(!$vacancy){
            return response()->json([
                'message' => 'Vacancy not found.',
                'status' => 404
            ], 404);
        }

        $validation = Validator::make($request->all(), [
            'position' => 'required|string|max:150',
            'location' => 'required|string|max:150',
            'description' => 'required|string',
            'schedule' => 'required|string|max:255',
            'requirements' => 'required|string',
            'user_id' => 'required|integer|numeric|gt:0',
            'category_id' => 'required|integer|numeric|gt:0',
            'status' => 'required|integer|numeric'
        ]);

        if($validation->fails()){
            return response()->json([
                'message' => 'Invalid data.',
                'errors' => $validation->errors(),
                'status' => 400
            ], 400);
        }

        $vacancy->position = $request->position;
        $vacancy->location = $request->location;
        $vacancy->description = $request->description;
        $vacancy->schedule = $request->schedule;
        $vacancy->requirements = $request->requirements;
        $vacancy->user_id = $request->user_id;
        $vacancy->category_id = $request->category_id;
        $vacancy->status = $request->status;
        $vacancy->save();

        return response()->json([
            'message' => 'Vacancy updated successfully.',
            'data' => $vacancy,
            'status' => 200
        ]);
    }

    public function destroy($id)
    {
        $vacancy = Vacancy::find($id);

        if(!$vacancy){
            return response()->json([
                'message' => 'Vacancy not found.',
                'status' => 404
            ], 404);
        }

        $vacancy->status = 0;
        $vacancy->save();

        return response()->json([
            'message' => 'Vacancy disabled successfully',
            'status' => 200
        ]);
    }
}

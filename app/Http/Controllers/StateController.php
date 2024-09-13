<?php

namespace App\Http\Controllers;

use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StateController extends Controller
{
    public function index()
    {
        $states = State::all();

        return response()->json([
            'message' => 'States queried successfully.',
            'data' => $states,
            'status' => 200
        ]);
    }

    public function show($id)
    {
        $state = State::find($id);

        if(!$state){
            return response()->json([
                'message' => 'State not found.',
                'status' => 404
            ], 404);
        }

        return response()->json([
            'message' => 'State queried successfully.',
            'data' => $state,
            'status' => 200
        ]);
    }

    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'name' => 'required|string|unique:states|max:255',
            'code' => 'required|min:3|max:3',
            'area_code_id' => 'required|integer'
        ]);

        if($validation->fails()){
            return response()->json([
                'message' => 'Invalid data.',
                'errors' => $validation->errors(),
                'status' => 400
            ], 400);
        }

        $state = State::create($request->all());

        return response()->json([
            'message' => 'State created successfully.',
            'data' => $state,
            'status' => 200
        ]);
    }

    public function update(Request $request, $id)
    {
        $state = State::find($id);

        if(!$state){
            return response()->json([
                'message' => 'State not found.',
                'state' => 404
            ], 404);
        }

        $validation = Validator::make($request->all(), [
            'name' => 'required|string|unique:states|max:255',
            'code' => 'required|min:3|max:3'
        ]);

        if($validation->fails()){
            return response()->json([
                'message' => 'Invalid data.',
                'errors' => $validation->errors(),
                'status' => 400
            ], 400);
        }

        $state->name = $request->name;
        $state->code = $request->code;
        $state->save();

        return response()->json([
            'message' => 'State updated successfully.',
            'data' => $state,
            'status' => 200
        ]);
    }

    public function destroy($id)
    {
        $state = State::find($id);

        if(!$state){
            return response()->json([
                'message' => 'State not found.',
                'status' => 404
            ], 404);
        }

        $state->delete();

        return response()->json([
            'message' => 'State deleted successfully.',
            'state' => 200
        ]);
    }
}

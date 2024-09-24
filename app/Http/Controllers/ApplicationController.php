<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;
use App\Mail\MailApplication;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ApplicationController extends Controller
{
    //
    public function index()
    {
        $applications = Application::all();

        return response()->json([
            'message' => 'Applications queried successfully',
            'data' => $applications,
            'status' => 200
        ]);
    }

    public function show($id)
    {
        $application = Application::find($id);

        if(!$application){
            return response()->json([
                'message' => 'Application not found.',
                'status' => 404
            ], 404);
        }

        return response()->json([
            'message' => 'Application found successfully.',
            'data' => $application,
            'status' => 200
        ]);
    }

    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'name' => ['required', 'string', 'min:4', 'max:255'],
            'phone' => ['required', 'max:15', 'min:12', 'regex:/^\\+?\\d{3}-\\d{3}-\\d{4}$/'],
            'email' => 'required|email|max:255',
            'message' => 'required|string',
            'cv' => 'max:255',
            'vacancy_id' => 'required|integer|gt:0',
            'category_id' => 'required|integer|gt:0',
            'area_code_id' => 'required|integer|gt:0',
        ]);

        if($validation->fails()){
            return response()->json([
                'message' => 'Invalid data',
                'errors' => $validation->errors(),
                'status' => 400
            ], 400);
        }

        $application = Application::create($request->all());

        Mail::to('programador.jr@coorsamexico.mx')->send(new MailApplication($application));

        return response()->json([
            'message' => 'Application created successfully.',
            'data' => $application,
            'status' => 200
        ]);
    }
}

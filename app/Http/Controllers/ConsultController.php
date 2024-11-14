<?php

namespace App\Http\Controllers;

use App\Models\Consult;
use Illuminate\Http\Request;
use App\Mail\MailConsult;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ConsultController extends Controller
{
    public function index()
    {
        $consults = DB::table('consults')->orderBy('created_at', 'desc')->get();

        return response()->json([
            'message' => 'Consult queried successfully.',
            'data' => $consults,
            'status' => 200
        ]);
    }

    public function show($id)
    {
        $consult = Consult::find($id);

        if(!$consult){
            return response()->json([
                'message' => 'Consult not found.',
                'status' => 404
            ], 404);
        }

        return response()->json([
            'message' => 'Consult found successfully.',
            'data' => $consult,
            'status' => 200
        ]);
    }

    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'phone' => ['required', 'max:15', 'min:12', 'regex:/^\\+?\\d{3}-\\d{3}-\\d{4}$/'],
            'email' => 'required|email|max:255',
            'message' => 'required|string',
            'area_code_id' => 'required|integer|gt:0',
            'service_id' => 'required|integer|gt:0',
            'state_id' => 'required|integer|gt:0',
        ]);

        if($validation->fails()){
            return response()->json([
                'message' => 'Invalid data.',
                'errors' => $validation->errors(),
                'status' => 400
            ], 400);
        }

        $consult = Consult::create($request->all());

        Mail::to('programador.jr@coorsamexico.mx')->send(new MailConsult($consult));

        return response()->json([
            'message' => 'Consult created successfully',
            'data' => $consult,
            'status' => 200
        ]);
    }
}

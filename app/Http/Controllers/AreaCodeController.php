<?php

namespace App\Http\Controllers;

use App\Models\AreaCode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AreaCodeController extends Controller
{
    public function index()
    {
        $codes = AreaCode::all();

        return response()->json([
            'message' => 'Area codes queried successfully.',
            'data' => $codes,
            'status' => 200
        ]);
    }

    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'code' => 'required|min:2|max:8'
        ]);

        if($validation->fails()){
            return response()->json([
                'message' => 'Invalid data.',
                'errors' => $validation->errors(),
                'status' => 400
            ], 400);
        }

        $code = AreaCode::create($request->all());

        return response()->json([
            'message' => 'Area code created successfully.',
            'data' => $code,
            'status' => 200
        ]);
    }

    public function show($id)
    {
        $code = AreaCode::find($id);

        if(!$code){
            return response()->json([
                'message' => 'Area code not found.',
                'status' => 404
            ], 404);
        }

        return response()->json([
            'message' => 'Area code found.',
            'data' => $code,
            'status' => 200
        ]);
    }

    public function update(Request $request, $id)
    {
        $code = AreaCode::find($id);

        if(!$code){
            return response()->json([
                'message' => 'Area code not found.',
                'status' => 404
            ], 404);
        }

        $validation = Validator::make($request->all(), [
            'code' => 'required|min:2|max:8'
        ]);

        if($validation->fails()){
            return response()->json([
                'message' => 'Invalid data.',
                'errors' => $validation->errors(),
                'status' => 400
            ], 400);
        }

        $code->code = $request->code;
        $code->save();

        return response()->json([
            'message' => 'Area code updated successfully.',
            'data' => $code,
            'status' => 200
        ]);
    }

    public function destroy($id)
    {
        $code = AreaCode::find($id);

        if(!$code){
            return response()->json([
                'message' => 'Area code not found.',
                'status' => 404
            ], 404);
        }

        $code->delete();

        return response()->json([
            'message' => 'Area code deleted successfully.',
            'status' => 200
        ]);
    }
}

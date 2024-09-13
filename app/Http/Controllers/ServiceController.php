<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ServiceController extends Controller
{
    //
    public function index()
    {
        $services = Service::all();

        return response()->json([
            'message' => 'Request fulfilled successfully.',
            'data' => $services,
            'status' => 200
        ]);
    }

    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'name' => 'required|string|unique:services|max:255',
            'description' => 'required|string',
            'user_id' => 'required'
        ]);

        if($validation->fails()){
            return response()->json([
                'message' => 'Invalid data.',
                'errors' => $validation->errors(),
                'status' => 400
            ], 400);
        }

        $service = Service::create($request->all());

        return response()->json([
            'message' => 'Service registered correctly.',
            'data' => $service,
            'status' => 200
        ]);
    }

    public function show($id)
    {
        $service = Service::find($id);

        if(!$service){
            return response()->json([
                'message' => 'Service not found.',
                'status' => 404
            ], 404);
        }

        return response()->json([
            'message' => 'Service found.',
            'data' => $service,
            'status' => 200
        ]);
    }

    public function update(Request $request, $id)
    {
        $service = Service::find($id);

        if(!$service){
            return response()->json([
                'message' => 'Service not found.',
                'status' => 404
            ], 404);
        }

        $validation = Validator::make($request->all(), [
            'name' => 'required|string|unique:users|max:255',
            'description' => 'required|string'
        ]);

        if($validation->fails()){
            return response()->json([
                'message' => 'Invalid data.',
                'errors' => $validation->errors(),
                'status' => 400
            ], 400);
        }

        $service->name = $request->name;
        $service->description = $request->description;
        $service->save();

        return response()->json([
            'message' => 'Service updated successfully.',
            'data' => $service,
            'status' => 200
        ]);
    }

    public function destroy($id)
    {
        $service = Service::find($id);

        if(!$service){
            return response()->json([
                'message' => 'Error, Service not found.',
                'status' => 404
            ], 404);
        }

        $service->delete();

        return response()->json([
            'message' => 'Service deleted successfully.',
            'status' => 200
        ]);
    }
}

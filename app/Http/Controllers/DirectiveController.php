<?php

namespace App\Http\Controllers;

use App\Models\Directive;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class DirectiveController extends Controller
{
    public function index()
    {
        $directives = Directive::all();

        return response()->json([
            'message' => 'Request successful.',
            'data' => $directives,
            'status' => 200
        ]);
    }

    public function show($id)
    {
        $directive = Directive::find($id);

        if(!$directive){
            return response()->json([
                'message' => 'Error, directive not found.',
                'status' => 404
            ], 404);
        }

        return response()->json([
            'message' => 'Request successfull. Directive found.',
            'data' => $directive,
            'status' => 200
        ]);
    }


    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:50|min:8|unique:directives',
            'position' => 'required|max:50|min:3|unique:directives',
            'image' => 'required|image|mimes:jpg,png,jpeg'
        ]);

        if($validator->fails()){
            return response()->json([
                'message' => 'Data validation failed.',
                'errors' => $validator->errors(),
                'status' => 400 
            ], 400);
        }

        $disk = Storage::disk('gcs');

        $path = $disk->putFile('img/Directivos', $request->file('image'));

        $publicPath = 'https://storage.googleapis.com/coorsa-mexico-web/' . $path;

        $directive = new Directive;
        $directive->name = $request->name;
        $directive->position = $request->position;
        $directive->image = $publicPath;
        
        $directive->save();

        return response()->json([
            'message' => 'Directive stored successfully.',
            'data' => $directive,
            'status' => 200
        ]);
    }

    public function update(Request $request, $id)
    {
        // * Update info, not the image of the directive
        // ! Symfony does not work with form-data

        $directive = Directive::find($id);

        if(!$directive){
            return response()->json([
                'message' => 'Error, directive not found.',
                'status' => 404
            ], 404);
        }

        $validation = Validator::make($request->all(), [
            'name' => ['required', 'max:50', 'min:8', 'unique:directives'],
            'position' => ['required', 'max:50', 'min:3', 'unique:directives'],
        ]);

        if($validation->fails()){
            return response()->json([
                'message' => 'Error, invalid data.',
                'errors' => $validation->errors(),
                'status' => 400 
            ], 400);
        }

        $directive->name = $request->name;
        $directive->position = $request->position;
        $directive->save();

        return response()->json([
            'message' => 'Directive updated successfully.',
            'data' => $directive,
            'status' => 200
        ]);
    }

    public function newImage(Request $request, $id)
    {
        $directive = Directive::find($id);

        if(!$directive){
            return response()->json([
                'message' => 'Directive not found',
                'status' => 404
            ], 404);
        }

        $oldImage = substr($directive->image, 64);

        $validation = Validator::make($request->all(), [
            'image' => 'required|image|mimes:jpg,png,jpeg'
        ]);

        if($validation->fails()){
            return response()->json([
                'message' => 'Invalid data',
                'errors' => $validation->errors(),
                'status' => 400
            ], 400);
        }

        $storage = Storage::disk('gcs');

        $storage->delete('img/Directivos/' . $oldImage);

        $path = $storage->putFile('img/Directivos', $request->file('image'));

        $directive->image = 'https://storage.googleapis.com/coorsa-mexico-web/' . $path;
        $directive->save();

        return response()->json([
            'message' => 'Directive image updated successfully',
            'data' => $directive,
            'status' => 200
        ]);
    }

    public function destroy($id)
    {
        $directive = Directive::find($id);

        if(!$directive){
            return response()->json([
                'message' => 'Error, directive not found.',
                'status' => 404
            ], 404);
        }

        $oldImage = substr($directive->image, 64);

        Storage::disk('gcs')->delete('img/Directivos/' . $oldImage);

        $directive->delete();

        return response()->json([
            'message' =>'Directive deleted successfully.',
            'status' => 200
        ]);
    }
}

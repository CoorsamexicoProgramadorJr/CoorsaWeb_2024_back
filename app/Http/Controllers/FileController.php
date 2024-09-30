<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class FileController extends Controller
{
    //
    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'file' => ['required', 'file', 'mimes:pdf,doc,docx', 'extensions:pdf,doc,docx', 'max:2048']
        ]);

        if($validation->fails()){
            return response()->json([
                'message' => 'Data validation failed.',
                'errors' => $validation->errors(),
                'status' => 400
            ], 400);
        }

        $disk = Storage::disk('gcs');

        $path = $disk->putFile('Curriculums/', $request->file('file'));
        
        $url = $disk->path($path);

        return [
            'path' => $path,
            'url' => $url
        ];
    }
}

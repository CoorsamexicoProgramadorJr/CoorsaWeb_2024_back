<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    //
    public function index()
    {
        $users = User::all();

        return response()->json($users, 200);
    }

    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:4'
        ]);

        if($validation->fails()){
            $data = [
                'message' => 'Error, invalid data',
                'errors' => $validation->errors(),
                'status' => 400
            ];
            return response()->json($data, 400);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password
        ]);

        if(!$user){
            $data = [
                'message' => 'Error creating the user',
                'status' => 500
            ];
            return response()->json($data, 500);
        }

        $data = [
            'user' => $user,
            'status' => 201
        ];

        return response()->json($data, 201);
    }

    public function show($id)
    {
        $user = User::find($id);

        if(!$user){
            $data = [
                'message' => 'User not found',
                'status' => 404
            ];

            return response()->json($data, 404);
        }

        $data = [
            'data' => $user,
            'status' => 200
        ];

        return response()->json($data, 200);
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);

        if(!$user){
            $data = [
                'message' => 'User not found',
                'status' => 404
            ];

            return response()->json($data, 404);
        }

        $validation = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:4'
        ]);

        if($validation->fails()){
            $data = [
                'message' => 'Error, invalid data',
                'errors' => $validation->errors(),
                'status' => 400
            ];
            return response()->json($data, 400);
        }

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;

        $user->save();

        $data = [
            'massage' => 'User updated successfully',
            'data' => $user,
            'status' => 200
        ];

        return response()->json($data, 200);
    }

    public function updatePartial(Request $request, $id)
    {
        $user = User::find($id);

        if(!$user){
            $data = [
                'message' => 'User not found',
                'status' => 404
            ];
            return response()->json($data, 404);
        }

        $validation = Validator::make($request->all(), [
            'name' => 'max:255',
            'email' => 'email|max:255|unique:users',
            'password' => 'confirmed|min:4'
        ]);

        if($validation->fails()){
            $data = [
                'message' => 'Error, invalid data',
                'errors' => $validation->errors(),
                'status' => 400
            ];
            return response()->json($data, 400);
        }

        if($request->has('name')){
            $user->name = $request->name;
        }

        if($request->has('email')){
            $user->email = $request->email;
        }
        if($request->has('password')){
            $user->password = $request->password;
        }

        $data = [
            'message' => 'User updated successfully',
            'data' => $user,
            'status' => 200
        ];
        
        return response()->json($data, 200);
    }

    public function destroy($id){
        $user = User::find($id);

        if(!$user){
            $data = [
                'message' => 'Error, user not found',
                'status' => 404
            ];
            return response()->json($data, 404);
        }

        $user->delete();

        $data = [
            'message' => 'User deleted successfully',
            'status' => 200
        ];

        return response()->json($data, 200);
    }
}

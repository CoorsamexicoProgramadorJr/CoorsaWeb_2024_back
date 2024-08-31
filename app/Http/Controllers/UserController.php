<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return response()->json([
            'data' => $users
        ], 200);
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

    public function getCategoriesByUser($user_id)
    {
        $user = User::find($user_id);

        if(!$user){
            return response()->json([
                'message' => 'User not found.',
                'status' => 404
            ], 404);
        }

        $categories = $user->categories;

        if(!$categories){
            return response()->json([
                'message' => 'Categories from this user not found.',
                'status' => 404
            ], 404);
        }

        return response()->json([
            'message' => 'Categories found successfully.',
            'data' => $categories,
            'status' => 200
        ]);
    }

    public function getVacanciesByUser($user_id)
    {
        $user = User::find($user_id);

        if(!$user){
            return response()->json([
                'message' => 'User not found.',
                'status' => 404
            ], 404);
        }

        $vacancies = $user->vacancies;

        if(!$vacancies){
            return response()->json([
                'message' => 'Vacancies from this user not found.',
                'status' => 404
            ], 404);
        }

        return response()->json([
            'message' => 'Vacancies consulted successfully.',
            'data' => $vacancies,
            'status' => 200
        ]);
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

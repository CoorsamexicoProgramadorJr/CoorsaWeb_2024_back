<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    //
    public function index()
    {
        $categories = Category::all();

        return response()->json([
            'data' => $categories
        ],200);
    }

    public function show($id)
    {
        $category = Category::find($id);

        if(!$category){
            return response()->json([
                'message' => 'Category do not found.',
                'status' => 404
            ], 404);
        }

        return response()->json([
            'data' => $category,
            'status' => 200
        ]);
    }

    // Get vacancies by category
    public function getVacanciesByCategory($category_id)
    {
        $category = Category::find($category_id);

        if(!$category){
            return response()->json([
                'message' => 'Category not found.',
                'status' => 404
            ], 404);
        }

        $vacancies = $category->vacancies;

        if($vacancies->empty()){
            return response()->json([
                'message' => 'Vacancies not found.',
                'status' => 404
            ], 404);
        }

        return response()->json([
            'message' => 'Vacancies found successfully.',
            'data' => $vacancies,
            'status' => 200
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'user_id' => 'required|integer' 
        ]);

        $category = Category::create($request->all());

        return response()->json([
            'message' => 'Category saved correctly.',
            'data' => $category,
            'status' => 201
        ], 201);
    }

    public function update(Request $request, $id)
    {
        $category = Category::find($id);

        if(!$category){
            return response()->json([
                'message' => 'Category not found.',
                'status' => 404
            ], 404);
        }

        $validation = Validator::make($request->all(), [
            'name' => 'required|max:255|string',
            'user_id' => 'required'
        ]);

        if($validation->fails()){
            return response()->json([
                'message' => 'Invalid data.',
                'errors' => $validation->errors(),
                'status' => 400
            ], 400);
        }

        $category->name = $request->name;
        $category->user_id = $request->user_id;
        $category->save();

        return response()->json([
            'message' => 'Category updated successfully.',
            'data' => $category,
            'status' => 200
        ]);
    }

    public function destroy($id)
    {
        $category = Category::find($id);

        if(!$category){
            return response()->json([
                'message' => 'Category not found.',
                'status' => 404
            ], 404);
        }

        $category->delete();

        return response()->json([
            'message' => 'Category deleted successfully.',
            'status' => 200
        ]);
    }
}

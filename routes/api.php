<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VacancyController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'v1'], function(){
  // Public endpoints
  Route::post('user/register', [AuthController::class, 'register']);
  Route::post('user/login', [AuthController::class, 'login']);
  
  Route::get('categories', [CategoryController::class, 'index']);
  Route::get('categories/{id}', [CategoryController::class, 'show']);
  Route::get('categories/{id}/vacancies', [CategoryController::class, 'getVacanciesByCategory']);

  Route::get('vacancies', [VacancyController::class, 'index']);
  Route::get('vacancies/{id}', [VacancyController::class, 'show']);
  
  // Private endpoints
  Route::middleware('auth:sanctum')->group(function(){
    Route::post('user/logout', [AuthController::class, 'logout']);
  
    Route::get('/user', [UserController::class, 'index']);
    Route::get('/user/{id}', [UserController::class, 'show']);
    Route::get('user/{id}/categories', [UserController::class, 'getCategoriesByUser']);
    Route::get('user/{id}/vacancies', [UserController::class, 'getVacanciesByUser']);
    Route::put('/user/{id}', [UserController::class, 'update']);
    Route::delete('/user/{id}', [UserController::class, 'destroy']);

    Route::post('categories', [CategoryController::class, 'store']);
    Route::put('categories/{id}', [CategoryController::class, 'update']);
    Route::delete('categories/{id}', [CategoryController::class, 'destroy']);
    
    Route::post('vacancies', [VacancyController::class, 'store']);
    Route::put('vacancies/{id}', [VacancyController::class, 'update']);
    Route::delete('vacancies/{id}', [VacancyController::class, 'destroy']);
  });
});
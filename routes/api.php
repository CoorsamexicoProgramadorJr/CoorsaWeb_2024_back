<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\ConsultController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\VacancyController;
use App\Http\Controllers\AreaCodeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ApliccationController;
use App\Http\Controllers\ApplicationController;

Route::group(['prefix' => 'v1'], function(){
  // Public endpoints
  Route::post('user/register', [AuthController::class, 'register']);
  Route::post('user/login', [AuthController::class, 'login']);
  
  Route::get('categories', [CategoryController::class, 'index']);
  Route::get('categories/{id}', [CategoryController::class, 'show']);
  Route::get('categories/{id}/vacancies', [CategoryController::class, 'getVacanciesByCategory']);

  Route::get('vacancies', [VacancyController::class, 'index']);
  Route::get('vacancies/{id}', [VacancyController::class, 'show']);

  Route::get('services', [ServiceController::class, 'index']);

  Route::get('areaCodes', [AreaCodeController::class, 'index']);
  Route::get('areaCodes/{id}', [AreaCodeController::class, 'show']);
  
  Route::get('states', [StateController::class, 'index']);
  Route::get('states/{id}', [StateController::class, 'show']);
  Route::get('fullStates', [StateController::class, 'fullStatesData']);

  Route::post('consults', [ConsultController::class, 'store']);
  
  Route::post('applications', [ApplicationController::class, 'store']);
  
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

    Route::post('services', [ServiceController::class, 'store']);
    Route::get('services/{id}', [ServiceController::class, 'show']);
    Route::put('services/{id}', [ServiceController::class, 'update']);
    Route::delete('services/{id}', [ServiceController::class, 'destroy']);

    Route::post('areaCodes', [AreaCodeController::class, 'store']);
    Route::put('areaCodes/{id}', [AreaCodeController::class, 'update']);
    Route::delete('areaCodes/{id}', [AreaCodeController::class, 'destroy']);
    
    Route::post('states', [StateController::class, 'store']);
    Route::put('states/{id}', [StateController::class, 'update']);
    Route::delete('states/{id}', [StateController::class, 'destroy']);

    Route::get('consults', [ConsultController::class, 'index']);
    Route::get('consults/{id}', [ConsultController::class, 'show']);
    
    Route::get('applications', [ApplicationController::class, 'index']);
    Route::get('applications/{id}', [ApplicationController::class, 'show']);
  });
});
<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



// Route::get('/cars', 'CarController@index'); 
Route::get('/',[App\Http\Controllers\CarController::class,'index']);
Route::post('/',[App\Http\Controllers\CarController::class,'index']);

Route::get('/cars/create',[App\Http\Controllers\CarController::class,'create']);
Route::post('/cars/create',[App\Http\Controllers\CarController::class,'store']);

Route::get('/cars/{carid}',[App\Http\Controllers\CarController::class,'show']);

<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/cars', function(){
    return 'All rental Cras Api original';
});

// public routes 
Route::get('/cars',[CarsController::class,'index']);
Route::get('/cars/{id}',[CarsController::class,'show']);
Route::post('/cars',[CarsController::class,'store']);
Route::put('/cars/{id}',[CarsController::class,'update']);
Route::delete('/cars/{id}',[CarsController::class,'destroy']);
Route::get('/cars/search/{location}',[CarsController::class,'search']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CityController;
use App\Http\Controllers\PersonController;
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

Route::get('/', function () {
    return redirect('/people');
});
Route::get('/people',[PersonController::class,'all']);
Route::get('/cities',[CityController::class,'all']);
Route::get('/search',[CityController::class,'search']);

Route::post('/people',[PersonController::class,'create']);
Route::post('/cities',[CityController::class,'create']);

Route::get('/people/{id}',[PersonController::class,'edit']);
Route::get('/city/{id}',[CityController::class,'edit']);

Route::post('/city/{id}',[CityController::class,'update']);

Route::post('/people/{id}/delete',[PersonController::class,'delete']);
Route::post('/city/{id}/delete',[CityController::class,'delete']);

Route::post('/people/{id}',[PersonController::class,'update']);
Route::post('/cities/{id}',[CityController::class,'update']);
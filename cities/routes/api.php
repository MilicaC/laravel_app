<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\rest\CityRestController;
use App\Http\Controllers\rest\PersonRestController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|   
    GET /people - vrati mi sve osobe iz baze - metoda index iz kontrolera
    GET /people/{id} - vrati osobu sa datim id - jem - show iz kontrolera
    POST /people - kreiraj novu osobu podacima iz tela zavteva - store
    PUT /people/{id} - izmeni osobu sa datim id - jem podacima iz tela zavteva - update
    DELETE /people/{id} - obrisi osobu sa datim id - jem iz baze - destroy
*/

Route::apiResources([
    '/people'=>PersonRestController::class,
    '/cities'=>CityRestController::class,
]);
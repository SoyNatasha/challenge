<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\vuelos;
use App\Models\clientes;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/vuelos', function(){
    return vuelos::all();
});

Route::get('/vuelos/{id}', function($id){
    return vuelos::findOrFail($id) ;
});

Route::get('/clientes', function(){
    return clientes::all();
});

Route::get('/clientes/{id}', function($id){
    return clientes::findOrFail($id) ;
});
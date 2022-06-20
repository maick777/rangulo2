<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UbigeoController;

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

Route::get('/departamentos', [UbigeoController::class,'get_api_departamentos']);
Route::get('/provincias/', [UbigeoController::class,'get_api_provincias']);
Route::get('/distritos', [UbigeoController::class,'get_api_distritos']);


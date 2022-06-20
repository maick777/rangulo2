<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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

/* Rutas públicas */

Route::get('/cotizacion_hogar', function () {
	return view('hogar.create');
});

Route::get('/cotizacion_salud', function () {
	return view('salud.create');
});

Route::get('/cotizacion_eps', function () {
	return view('eps.create');
});

Route::get('/cotizacion_sctr', function () {
	return view('sctr.create');
});

Route::get('/cotizacion_vehicular', function () {
	return view('vehiculo.create');
});

Route::post('hogar.stores', ['as' => 'hogar.stores', 'uses' => 'App\Http\Controllers\HogarController@store']);
Route::post('salud.stores', ['as' => 'salud.stores', 'uses' => 'App\Http\Controllers\SaludController@store']);
Route::post('eps.stores',   ['as' => 'eps.stores', 'uses'   => 'App\Http\Controllers\EpsController@store']);
Route::post('sctr.stores',  ['as' => 'sctr.stores', 'uses'  => 'App\Http\Controllers\SctrController@store']);
Route::post('vehiculo.stores',  ['as' => 'vehiculo.stores', 'uses'  => 'App\Http\Controllers\VehiculoController@store']);


Route::get('/', function () {
	return view('welcome');
});

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function () {
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});

Route::group(['middleware' => 'auth'], function () {

	Route::put('hogar.archivar/{id}', ['as' => 'hogar.archivar', 'uses' => 'App\Http\Controllers\HogarController@archivar']);
	Route::put('salud.archivar/{id}', ['as' => 'salud.archivar', 'uses' => 'App\Http\Controllers\SaludController@archivar']);
	Route::put('eps.archivar/{id}', ['as' => 'eps.archivar', 'uses' => 'App\Http\Controllers\EpsController@archivar']);
	Route::put('sctr.archivar/{id}', ['as' => 'sctr.archivar', 'uses' => 'App\Http\Controllers\SctrController@archivar']);

	Route::resource('user', 'App\Http\Controllers\UserController',   ['except' => ['show']]);
	Route::resource('hogar', 'App\Http\Controllers\HogarController', ['except' => ['edit', 'store', 'delete']]);
	Route::resource('salud', 'App\Http\Controllers\SaludController', ['except' => ['edit', 'store', 'delete']]);
	Route::resource('eps', 'App\Http\Controllers\EpsController',     ['except' => ['edit', 'store', 'delete']]);
	Route::resource('sctr', 'App\Http\Controllers\SctrController',   ['except' => ['edit', 'store', 'delete']]);

});

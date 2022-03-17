<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


Route::get('/Rol', 'App\Http\Controllers\RolController@index'); //mostrar registro
Route::post('/Rol', 'App\Http\Controllers\RolController@store');  //crear registro
Route::put('/Rol{id}', 'App\Http\Controllers\RolController@update'); //actualizar un registro
Route::delete('/Rol{id}', 'App\Http\Controllers\RolController@destroy'); // eliminar un registro

Route::get('/City', 'App\Http\Controllers\CityController@index'); //mostrar registro
Route::post('/City', 'App\Http\Controllers\CityController@store');  //crear registro
Route::put('/City{id}', 'App\Http\Controllers\CityController@update'); //actualizar un registro
Route::delete('/City{id}', 'App\Http\Controllers\CityController@destroy'); // eliminar un registro

Route::get('/Comment', 'App\Http\Controllers\CommentController@index'); //mostrar registro
Route::post('/Comment', 'App\Http\Controllers\CommentController@store');  //crear registro
Route::put('/Comment{id}', 'App\Http\Controllers\CommentController@update'); //actualizar un registro
Route::delete('/Comment{id}', 'App\Http\Controllers\CommentController@destroy'); // eliminar un registro

Route::get('/Place', 'App\Http\Controllers\PlaceController@index'); //mostrar registro
Route::post('/Place', 'App\Http\Controllers\PlaceController@store');  //crear registro
Route::put('/Place{id}', 'App\Http\Controllers\PlaceController@update'); //actualizar un registro
Route::delete('/Place{id}', 'App\Http\Controllers\PlaceController@destroy'); // eliminar un registro

Route::get('/Photo', 'App\Http\Controllers\PhotoController@index'); //mostrar registro
Route::post('/Photo', 'App\Http\Controllers\PhotoController@store');  //crear registro
Route::put('/Photo{id}', 'App\Http\Controllers\PhotoController@update'); //actualizar un registro
Route::delete('/Photo{id}', 'App\Http\Controllers\PhotoController@destroy'); // eliminar un registro

Route::get('/Userphoto', 'App\Http\Controllers\UserphotoController@index'); //mostrar registro
Route::post('/Userphoto', 'App\Http\Controllers\UserphotoController@store');  //crear registro
Route::put('/Userphoto{id}', 'App\Http\Controllers\UserphotoController@update'); //actualizar un registro
Route::delete('/Userphoto{id}', 'App\Http\Controllers\UserphotoController@destroy'); // eliminar un registro
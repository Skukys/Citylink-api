<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group whichc
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/register', 'App\Http\Controllers\UserController@register');
Route::post('/login', 'App\Http\Controllers\UserController@login');

Route::middleware('checkAuth')->group(function () {
    Route::get('/logout', 'App\Http\Controllers\UserController@logout');
});
Route::get('/brands', 'App\Http\Controllers\Controller@brand');
Route::get('/socket', 'App\Http\Controllers\Controller@socket');
Route::get('/ram', 'App\Http\Controllers\Controller@ram');
Route::get('/reyt', 'App\Http\Controllers\Controller@reyt');
Route::post('/motherboard', 'App\Http\Controllers\MotherboardController@create');
Route::post('/processor', 'App\Http\Controllers\ProcessorController@create');
Route::post('/memory', 'App\Http\Controllers\MemoryController@create');
Route::post('/storage', 'App\Http\Controllers\StorageController@create');
Route::post('/power', 'App\Http\Controllers\PowerController@create');


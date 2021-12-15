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

Route::resource('/','\App\Http\Controllers\IndexController');
Route::resource('users', '\App\Http\Controllers\ControllerUsers');
//Route::get('/users/{id}', [\App\Http\Controllers\ControllerUsersx::class, 'show']);

Route::resource('series','\App\Http\Controllers\SerieController');
Route::get('/series/saison/{saison}',[\App\Http\Controllers\SerieController::class,'saison']);

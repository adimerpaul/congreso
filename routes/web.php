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

Route::get('/', function () {
    return view('welcome');
});
Route::get('users', [\App\Http\Controllers\UserController::class,'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth');
Route::get('/expocitores', [App\Http\Controllers\HomeController::class, 'expocitores'])->middleware('auth');
Route::get('/cursos', [App\Http\Controllers\HomeController::class, 'cursos'])->middleware('auth');

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
})->middleware('admin');

Route::get('/admin', [\App\Http\Controllers\AdminController::class, 'admin'])->middleware('guest');
Route::get('/admin/teachers', [\App\Http\Controllers\AdminController::class, 'teachers'])->middleware('guest');


// requests

Route::post('/r/login', [\App\Http\Controllers\AdminController::class, 'login_r']);
Route::post('/r/register', [\App\Http\Controllers\AdminController::class, 'register_r']);

<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/admin', [\App\Http\Controllers\AdminController::class, 'admin'])->middleware('auth');
Route::get('/admin/teachers', [\App\Http\Controllers\AdminController::class, 'teachers'])->middleware('auth');
Route::get('/admin/students', [\App\Http\Controllers\AdminController::class, 'students'])->middleware('auth');

Route::get('/admin/teacher/{teacher}', [\App\Http\Controllers\AdminController::class, 'teacher'])->middleware('auth');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

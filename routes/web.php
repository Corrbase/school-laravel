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

Auth::routes();



Route::group([
    'as' => 'admin.',
    'prefix' => '/admin',
], function () {

    Route::get('', [\App\Http\Controllers\AdminController::class, 'admin'])->middleware('auth');

    Route::group([
        'as' => 'teacher.',
        'prefix' => '/teacher'
    ], function (){

        Route::get('/', [\App\Http\Controllers\AdminController::class, 'teachers'])->middleware('auth');

        Route::get('/edit/{teacher}', [\App\Http\Controllers\AdminController::class, 'teacher_edit'])->middleware('auth');
        Route::get('/{teacher}', [\App\Http\Controllers\AdminController::class, 'teacher'])->middleware('auth');

        Route::put('/request/edit/{teacher}', [\App\Http\Controllers\AdminController::class, 'teacher_edit_r']);

    });

    Route::group([
        'as' => 'students.',
        'prefix' => 'students'
    ], function () {


        Route::get('/', [\App\Http\Controllers\AdminController::class, 'students'])->name('index');
        Route::get('/{teacher}', [\App\Http\Controllers\AdminController::class, 'teacher_students'])->middleware('auth');

        Route::post('/request', [\App\Http\Controllers\AdminController::class, 'students_r'])->name('student_request');
        Route::post('/request/search/teacher', [\App\Http\Controllers\AdminController::class, 'search_teacher'])->name('search');

        Route::delete('/delete/', [\App\Http\Controllers\AdminController::class, 'studentDelete'])->name('delete');
    });

});

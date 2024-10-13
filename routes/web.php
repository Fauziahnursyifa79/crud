<?php

use App\Http\Controllers\HobbiController;
use App\Http\Controllers\HobyController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', [StudentController::class, 'index'] ) ->name('student_index');
Route::get('/student/create', [StudentController::class, 'create'] ) ->name('student_create'); //ini untuk menampilkan form
Route::post('/student/store', [StudentController::class, 'store'] ) ->name('student_store');
Route::get('/student/edit/{id}', [StudentController::class, 'edit'] ) ->name('student_edit');
Route::put('/student/update/{id}', [StudentController::class, 'update'] ) ->name('student_update');
Route::delete('/student/delete/{id} ', [StudentController::class, 'destroy'] ) ->name('student_destroy');


Route::get('/hobi', [HobbiController::class, 'index'] ) ->name('hoby_index');



<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[App\Http\Controllers\StudentController::class, 'index'])->name('index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/student/add', [StudentController::class, 'add'])->name('student.add');
Route::post('/student/create', [StudentController::class, 'create'])->name('student.create');
Route::get('/student/update', [StudentController::class, 'update'])->name('student.update');
Route::get('/student/delete/{id}', [StudentController::class, 'delete'])->name('student.delete');
Route::get('/student/{id}', [StudentController::class, 'edit'])->name('student.edit');
Route::put('/student/{id}', [StudentController::class, 'update'])->name('student.update');
Route::get('/student/search', [StudentController::class, 'search']);



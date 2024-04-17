<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;
use App\Livewire\CreatePost;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ProgrammerController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index',function (){
    return view('layouts/app');
});

//Route::get('/teachers',[TeacherController::class, 'index'])->name('teachers.index');

//Route::get('/teacher/create',[TeacherController::class, 'create'])->name('teacher.create');

//Route::post('/teacher/store',[TeacherController::class, 'store'])->name('teacher.store');

Route::resource('teacher',TeacherController::class);

Route::resource('student',StudentController::class);

Route::resource('programmers', ProgrammerController::class);

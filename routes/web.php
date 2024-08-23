<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\CategoriesController;
use App\Models\Student;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::view('create', 'create');

Route::post('insert', [StudentController::class, 'studentInsert']);

Route::get('create', [CategoriesController::class, 'listCategories']);

Route::get('/', [StudentController::class, 'listStudent']);

Route::get('delete/{id}', [StudentController::class, 'deleteStudent'])->name('delete.student');

Route::get('view/{id}', [StudentController::class, 'viewStudent'])->name('view.student');

Route::get('edit/{id}', [StudentController::class, 'editStudent'])->name('edit.student');

Route::post('update/{id}', [StudentController::class, 'updateStudent'])->name('update.student');

Route::post('search', [StudentController::class, 'searchStudent']);


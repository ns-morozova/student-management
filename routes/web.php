<?php

use App\Http\Controllers\GroupController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

// Устанавливаем маршрут по умолчанию
Route::get('/', [GroupController::class, 'index'])->name('home');

Route::resource('groups', GroupController::class);
Route::get('groups/{group}/students/create', [StudentController::class, 'create'])->name('students.create');
Route::post('groups/{group}/students', [StudentController::class, 'store'])->name('students.store');
Route::get('groups/{group}/students/{student}', [StudentController::class, 'show'])->name('students.show');
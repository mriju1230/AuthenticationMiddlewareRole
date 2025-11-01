<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\AdminController;

// =============================
// Frontend Routes
// =============================
Route::get('/', [FrontendController::class, 'login'])->name('login');

Route::get('/student-register', [StudentController::class, 'studentReg'])->name('student.register.form');
Route::post('/student-register', [StudentController::class, 'register'])->name('student.register.submit');

Route::get('/student-login', [StudentController::class, 'studentLogin'])->name('student.login');

// =============================
// Backend/Admin Routes
// =============================
Route::get('/admin-panel', [BackendController::class, 'showAdmin'])->name('admin.dashboard');

Route::resource('/admin', AdminController::class);
Route::resource('/role', AdminController::class);

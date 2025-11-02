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

Route::get('/student-register', [StudentController::class, 'studentReg'])->name('frontend.pages.register');
Route::post('/student-register', [StudentController::class, 'register'])->name('frontend.pages.register');

Route::get('/student-login', [StudentController::class, 'studentLogin'])->name('frontend.pages.login');

// =============================
// Backend/Admin Routes
// =============================
// Admin login page
Route::get('/admin-panel', [BackendController::class, 'showAdminLogin'])->name('admin.login.page');

// Admin login POST
Route::post('/admin-login', [BackendController::class, 'login'])->name('admin.login');

// Admin dashboard
Route::get('/admin-dashboard', [BackendController::class, 'dashboard'])->name('admin.dashboard');

// Admin logout
Route::get('/admin-logout', [BackendController::class, 'logout'])->name('admin.logout');

// Admin management (CRUD)
Route::resource('/admins', AdminController::class);


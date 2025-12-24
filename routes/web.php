<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\ManajerController;
use App\Http\Controllers\Admin\KaryawanController as AdminKaryawanController;

/*
|--------------------------------------------------------------------------
| AUTH
|--------------------------------------------------------------------------
*/
Route::get('/', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('login.process');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

/*
|--------------------------------------------------------------------------
| DASHBOARD & ADMIN AREA
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {

    // Dashboard sesuai role
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/karyawan/dashboard', [KaryawanController::class, 'dashboard'])->name('karyawan.dashboard');
    Route::get('/manajer/dashboard', [ManajerController::class, 'dashboard'])->name('manajer.dashboard');

    // Admin - CRUD Karyawan
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::get('/karyawan', [AdminKaryawanController::class, 'index'])->name('karyawan.index');
        Route::get('/karyawan/create', [AdminKaryawanController::class, 'create'])->name('karyawan.create');
        Route::post('/karyawan', [AdminKaryawanController::class, 'store'])->name('karyawan.store');
    });

});

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\ManajerController;

// Admin
use App\Http\Controllers\Admin\KaryawanController as AdminKaryawanController;

// Karyawan
use App\Http\Controllers\Karyawan\PresensiController;

// Manajer
use App\Http\Controllers\Manajer\PresensiController as ManajerPresensiController;

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
| DASHBOARD & FITUR BERDASARKAN ROLE
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {

    /*
    |--------------------------------------------------------------------------
    | DASHBOARD
    |--------------------------------------------------------------------------
    */
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])
        ->name('admin.dashboard');

    Route::get('/karyawan/dashboard', [KaryawanController::class, 'dashboard'])
        ->name('karyawan.dashboard');

    Route::get('/manajer/dashboard', [ManajerController::class, 'dashboard'])
        ->name('manajer.dashboard');

    /*
    |--------------------------------------------------------------------------
    | KARYAWAN - PRESENSI
    |--------------------------------------------------------------------------
    */
    Route::get('/karyawan/presensi', [PresensiController::class, 'index'])
        ->name('karyawan.presensi');

    Route::post('/karyawan/presensi/masuk', [PresensiController::class, 'masuk'])
        ->name('karyawan.presensi.masuk');

    Route::post('/karyawan/presensi/pulang', [PresensiController::class, 'pulang'])
        ->name('karyawan.presensi.pulang');

    /*
    |--------------------------------------------------------------------------
    | MANAJER - LAPORAN PRESENSI
    |--------------------------------------------------------------------------
    */
    Route::get('/manajer/presensi', [ManajerPresensiController::class, 'index'])
        ->name('manajer.presensi');

    /*
    |--------------------------------------------------------------------------
    | ADMIN - CRUD KARYAWAN
    |--------------------------------------------------------------------------
    */
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::get('/karyawan', [AdminKaryawanController::class, 'index'])
            ->name('karyawan.index');

        Route::get('/karyawan/create', [AdminKaryawanController::class, 'create'])
            ->name('karyawan.create');

        Route::post('/karyawan', [AdminKaryawanController::class, 'store'])
            ->name('karyawan.store');
    });

});

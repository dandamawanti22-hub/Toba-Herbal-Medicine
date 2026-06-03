<?php

use Illuminate\Support\Facades\Route;

// =========================
// CONTROLLER
// =========================
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PenyakitController;
use App\Http\Controllers\HerbalController;
use App\Http\Controllers\ResepController;
use App\Http\Controllers\FrontendController;


// =====================================================
// FRONTEND (TANPA LOGIN)
// =====================================================
Route::get('/', [FrontendController::class, 'home']);
Route::get('/herbal', [FrontendController::class, 'herbal']);
Route::get('/herbal/{id}', [FrontendController::class, 'detailHerbal']);
Route::get('/penyakit', [FrontendController::class, 'penyakit']);
Route::get('/penyakit/{id}', [FrontendController::class, 'detailPenyakit']);
Route::get('/resep', [FrontendController::class, 'resep']);
Route::get('/resep-detail/{id}', [FrontendController::class, 'detailResep']);
Route::get('/explore', [FrontendController::class, 'explore']);
Route::get('/resep-bahan/{id}', [FrontendController::class, 'resepBahan']);


// =====================================================
// AUTH (LOGIN)
// =====================================================

// halaman login
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');

// proses login
Route::post('/login', [AuthController::class, 'login']);


// =====================================================
// ADMIN (HARUS LOGIN)
// =====================================================
Route::middleware('auth')->prefix('admin')->group(function () {

    // dashboard
    Route::get('/dashboard', [DashboardController::class, 'index']);

    // logout
    Route::post('/logout', [AuthController::class, 'logout']);

    // CRUD ADMIN
    Route::resource('penyakit', PenyakitController::class);
    Route::resource('herbal', HerbalController::class);
    Route::resource('resep', ResepController::class);
    Route::resource('bahan', \App\Http\Controllers\BahanController::class);

});
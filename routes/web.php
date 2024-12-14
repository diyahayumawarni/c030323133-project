<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BeasiswaPendaftaranController;

/**
 * Rute untuk Halaman Utama
 */
Route::get('/', function () {
    return view('welcome');
});

/**
 * Rute untuk Autentikasi dan User Management
 */
Route::prefix('auth')->group(function () {
    // Rute untuk login, register, dan logout
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/logout', [AuthController::class, 'logout']);
});

/**
 * Rute untuk Beasiswa, Pendaftaran, dan Fitur Terkait dengan Autentikasi
 */
Route::middleware('auth')->prefix('beasiswa')->group(function () {
    Route::get('/', [BeasiswaPendaftaranController::class, 'indexBeasiswa']);
    Route::get('/{id}', [BeasiswaPendaftaranController::class, 'showBeasiswa']);
    Route::post('/', [BeasiswaPendaftaranController::class, 'storeBeasiswa']);
    Route::put('/{id}', [BeasiswaPendaftaranController::class, 'updateBeasiswa']);
    Route::delete('/{id}', [BeasiswaPendaftaranController::class, 'destroyBeasiswa']);
});

Route::middleware('auth')->prefix('pendaftaran')->group(function () {
    Route::get('/', [BeasiswaPendaftaranController::class, 'indexPendaftaran']);
    Route::get('/{id}', [BeasiswaPendaftaranController::class, 'showPendaftaran']);
    Route::post('/', [BeasiswaPendaftaranController::class, 'storePendaftaran']);
    Route::put('/{id}', [BeasiswaPendaftaranController::class, 'updatePendaftaran']);
    Route::delete('/{id}', [BeasiswaPendaftaranController::class, 'destroyPendaftaran']);
});

Route::middleware('auth')->prefix('dokumen')->group(function () {
    Route::get('/', [BeasiswaPendaftaranController::class, 'indexDokumenPendukung']);
    Route::get('/{id}', [BeasiswaPendaftaranController::class, 'showDokumenPendukung']);
    Route::post('/', [BeasiswaPendaftaranController::class, 'storeDokumenPendukung']);
    Route::put('/{id}', [BeasiswaPendaftaranController::class, 'updateDokumenPendukung']);
    Route::delete('/{id}', [BeasiswaPendaftaranController::class, 'destroyDokumenPendukung']);
});

Route::middleware('auth')->prefix('notifikasi')->group(function () {
    Route::get('/', [BeasiswaPendaftaranController::class, 'indexNotifikasi']);
    Route::post('/', [BeasiswaPendaftaranController::class, 'storeNotifikasi']);
    Route::put('/{id}', [BeasiswaPendaftaranController::class, 'updateNotifikasi']);
    Route::delete('/{id}', [BeasiswaPendaftaranController::class, 'destroyNotifikasi']);
});

Route::middleware('auth')->prefix('review')->group(function () {
    Route::get('/', [BeasiswaPendaftaranController::class, 'indexReviewPendaftaran']);
    Route::post('/', [BeasiswaPendaftaranController::class, 'storeReviewPendaftaran']);
    Route::put('/{id}', [BeasiswaPendaftaranController::class, 'updateReviewPendaftaran']);
    Route::delete('/{id}', [BeasiswaPendaftaranController::class, 'destroyReviewPendaftaran']);
});

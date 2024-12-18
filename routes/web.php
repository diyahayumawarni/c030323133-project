<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BeasiswaPendaftaranController;
use Illuminate\Support\Facades\Auth;

// Route untuk halaman depan yang mengarahkan ke login
Route::get('/', function () {
    return redirect()->route('login.form'); // Redirect ke form login
});

// Route untuk menampilkan halaman login (GET)
Route::get('auth/login', function () {
    return view('login'); // Menampilkan form login dari view login.blade.php
})->name('login.form');

// Route untuk registrasi (GET)
Route::get('auth/register', function () {
    return view('register'); // Halaman register (buat file register.blade.php sesuai kebutuhan)
})->name('register.form');

// Route untuk login (POST)
Route::post('auth/login', [AuthController::class, 'login'])->name('login');

// Route untuk registrasi (POST)
Route::post('auth/register', [AuthController::class, 'register'])->name('register');

// Route untuk logout (POST)
Route::post('auth/logout', [AuthController::class, 'logout'])->name('logout');

// Middleware untuk pengguna yang sudah login
Route::middleware(['auth'])->group(function () {

    // Route untuk halaman home setelah login
    Route::get('/home', function () {
        return view('home'); // Halaman home yang menampilkan informasi setelah login
    })->name('home');

    // Daftar beasiswa
    Route::get('beasiswa', [BeasiswaPendaftaranController::class, 'indexBeasiswa'])->name('beasiswa.index');

    // Route untuk detail beasiswa
    Route::get('beasiswa/{id}', [BeasiswaPendaftaranController::class, 'showBeasiswa'])->name('beasiswa.show');

    Route::get('/pendaftaran', [BeasiswaPendaftaranController::class, 'indexPendaftaran'])->name('pendaftaran.index');
    Route::get('/pendaftaran/create', [BeasiswaPendaftaranController::class, 'createPendaftaran'])->name('pendaftaran.create');
    Route::post('/pendaftaran', [BeasiswaPendaftaranController::class, 'storePendaftaran'])->name('pendaftaran.store');

    // Route untuk detail pendaftaran
    Route::get('pendaftaran/{id}', [BeasiswaPendaftaranController::class, 'showPendaftaran'])->name('pendaftaran.show');

    // Route untuk halaman edit pendaftaran
    Route::get('pendaftaran/{id}/edit', [BeasiswaPendaftaranController::class, 'editPendaftaran'])->name('pendaftaran.edit');

    Route::get('/dokumen', [BeasiswaPendaftaranController::class, 'indexDokumenPendukung'])->name('dokumen.index');
  
    // Route untuk menampilkan detail dokumen pendukung
    Route::get('/dokumen/{id}', [BeasiswaPendaftaranController::class, 'showDokumenPendukung'])->name('dokumen.show');
    
    // Route untuk halaman edit dokumen pendukung
    Route::get('/dokumen/{id}/edit', [BeasiswaPendaftaranController::class, 'editDokumenPendukung'])->name('dokumen.edit');
    
    // Route untuk menghapus dokumen pendukung
    Route::delete('/dokumen/{id}', [BeasiswaPendaftaranController::class, 'destroyDokumenPendukung'])->name('dokumen.destroy');
    
    // Route untuk form tambah dokumen pendukung
    Route::get('/dokumen/create', [BeasiswaPendaftaranController::class, 'createDokumenPendukung'])->name('dokumen.create');
    Route::post('/dokumen', [BeasiswaPendaftaranController::class, 'storeDokumenPendukung'])->name('dokumen.store');
    Route::post('/logout', [AuthController::class, 'destroy'])->name('logout');
    // Route untuk verifikasi dokumen pendukung
    Route::put('dokumen/{dokumen}/verifikasi', [BeasiswaPendaftaranController::class, 'verifikasi'])->name('dokumen.verifikasi');

    // Route untuk store review pendaftaran
    Route::post('review-pendaftaran', [BeasiswaPendaftaranController::class, 'storeReviewPendaftaran'])->name('review.pendaftaran.store');

    // Route untuk store notifikasi
    Route::post('notifikasi', [BeasiswaPendaftaranController::class, 'storeNotifikasi'])->name('notifikasi.store');

    // Route untuk mengupdate beasiswa
    Route::put('beasiswa/{id}', [BeasiswaPendaftaranController::class, 'updateBeasiswa'])->name('beasiswa.update');

    // Route untuk mengupdate pendaftaran
    Route::put('pendaftaran/{id}', [BeasiswaPendaftaranController::class, 'updatePendaftaran'])->name('pendaftaran.update');

    // Route untuk mengupdate dokumen pendukung
    Route::put('dokumen/{id}', [BeasiswaPendaftaranController::class, 'updateDokumenPendukung'])->name('dokumen.update');

    // Route untuk mengupdate review pendaftaran
    Route::put('review-pendaftaran/{id}', [BeasiswaPendaftaranController::class, 'updateReviewPendaftaran'])->name('review.pendaftaran.update');

    // Route untuk mengupdate notifikasi
    Route::put('notifikasi/{id}', [BeasiswaPendaftaranController::class, 'updateNotifikasi'])->name('notifikasi.update');

    // Route untuk menghapus beasiswa
    Route::delete('beasiswa/{id}', [BeasiswaPendaftaranController::class, 'destroyBeasiswa'])->name('beasiswa.destroy');

    // Route untuk menghapus pendaftaran
    Route::delete('pendaftaran/{id}', [BeasiswaPendaftaranController::class, 'destroyPendaftaran'])->name('pendaftaran.destroy');

    // Route untuk menghapus dokumen pendukung
    Route::delete('dokumen/{id}', [BeasiswaPendaftaranController::class, 'destroyDokumenPendukung'])->name('dokumen.destroy');

    // Route untuk menghapus review pendaftaran
    Route::delete('review-pendaftaran/{id}', [BeasiswaPendaftaranController::class, 'destroyReviewPendaftaran'])->name('review.pendaftaran.destroy');

    // Route untuk menghapus notifikasi
    Route::delete('notifikasi/{id}', [BeasiswaPendaftaranController::class, 'destroyNotifikasi'])->name('notifikasi.destroy');

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});


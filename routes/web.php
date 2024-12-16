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

    // Detail beasiswa
    Route::get('beasiswa/{id}', [BeasiswaPendaftaranController::class, 'showBeasiswa'])->name('beasiswa.show'); // Menampilkan detail beasiswa

    // Daftar pendaftaran
    Route::get('pendaftaran', [BeasiswaPendaftaranController::class, 'indexPendaftaran'])->name('pendaftaran.index');

    // Detail pendaftaran
    Route::get('pendaftaran/{id}', [BeasiswaPendaftaranController::class, 'showPendaftaran'])->name('pendaftaran.show');

    // Daftar dokumen pendukung
    Route::get('dokumen', [BeasiswaPendaftaranController::class, 'indexDokumenPendukung'])->name('dokumen.index');
});

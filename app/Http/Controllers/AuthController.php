<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Beasiswa;
use App\Models\Pendaftaran;
use App\Models\DokumenPendukung;
use App\Models\Notifikasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    // Login User
    public function login(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required|string',
    ]);

    if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
        // Login berhasil
        return redirect()->route('home');
    }

    // Menambahkan pesan lebih jelas jika kredensial salah
    return redirect()->route('login.form')->withErrors(['email' => 'Email or password is incorrect'])->withInput();
}

    // Registrasi User
    public function register(Request $request)
    {
        // Validasi input dari request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        // Membuat user baru
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Meng-hash password
        ]);

        // Mengarahkan user ke halaman login setelah registrasi
        return redirect()->route('login.form')->with('success', 'Registration successful. Please log in.');
    }

    // Logout User
    public function logout(Request $request)
    {
        // Logout user
        Auth::logout();

        // Mengarahkan user ke halaman login setelah logout
        return redirect()->route('login.form')->with('success', 'Logout successful');
    }

    // Mendapatkan daftar Beasiswa
    public function getBeasiswa()
    {
        // Mendapatkan semua data beasiswa
        $beasiswa = Beasiswa::all();
        return response()->json($beasiswa);
    }

    // Pendaftaran Beasiswa
    public function pendaftaran(Request $request)
    {
        // Validasi input dari request
        $request->validate([
            'beasiswa_id' => 'required|exists:beasiswas,id',
        ]);

        // Menyimpan data pendaftaran
        $pendaftaran = Pendaftaran::create([
            'user_id' => Auth::id(),
            'beasiswa_id' => $request->beasiswa_id,
            'tanggal_daftar' => now(),
            'status' => 'pending',
        ]);

        return response()->json([
            'message' => 'Registration successful',
            'pendaftaran' => $pendaftaran,
        ]);
    }

    // Upload Dokumen Pendukung
    public function uploadDokumen(Request $request)
    {
        // Validasi input dari request
        $request->validate([
            'file' => 'required|file',
            'pendaftaran_id' => 'required|exists:pendaftarans,id',
        ]);

        // Menyimpan file yang di-upload
        $filePath = $request->file('file')->store('dokumen');

        // Menyimpan dokumen pendukung yang di-upload
        $dokumen = DokumenPendukung::create([
            'pendaftaran_id' => $request->pendaftaran_id,
            'nama_dokumen' => $request->file('file')->getClientOriginalName(),
            'file_path' => $filePath,
            'status_verifikasi' => 'pending',
        ]);

        return response()->json([
            'message' => 'Document uploaded successfully',
            'dokumen' => $dokumen,
        ]);
    }

    // Mendapatkan Notifikasi
    public function getNotifikasi()
    {
        // Mendapatkan semua notifikasi yang terkait dengan user yang sedang login
        $notifikasi = Notifikasi::where('user_id', Auth::id())->get();
        return response()->json($notifikasi);
    }

    // Metode untuk logout tanpa menghapus akun
    public function destroy(Request $request)
    {
        // Logout pengguna yang sedang login
        Auth::logout();

        // Mengarahkan user ke halaman login setelah logout
        return redirect()->route('login.form')->with('success', 'You have been logged out successfully.');
    }
}

<?php

namespace App\Services;

use App\Repositories\UserRepository;
use App\Repositories\BeasiswaRepository;
use App\Repositories\PendaftaranRepository;
use App\Repositories\DokumenPendukungRepository;
use App\Repositories\NotifikasiRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthService
{
    protected $userRepository;
    protected $beasiswaRepository;
    protected $pendaftaranRepository;
    protected $dokumenPendukungRepository;
    protected $notifikasiRepository;

    public function __construct(
        UserRepository $userRepository,
        BeasiswaRepository $beasiswaRepository,
        PendaftaranRepository $pendaftaranRepository,
        DokumenPendukungRepository $dokumenPendukungRepository,
        NotifikasiRepository $notifikasiRepository
    ) {
        $this->userRepository = $userRepository;
        $this->beasiswaRepository = $beasiswaRepository;
        $this->pendaftaranRepository = $pendaftaranRepository;
        $this->dokumenPendukungRepository = $dokumenPendukungRepository;
        $this->notifikasiRepository = $notifikasiRepository;
    }

    // Login User
    public function login(array $data)
    {
        if (Auth::attempt(['email' => $data['email'], 'password' => $data['password']])) {
            return [
                'success' => true,
                'user' => Auth::user(),
            ];
        }

        return [
            'success' => false,
            'message' => 'Invalid credentials',
        ];
    }

    // Registrasi User
    public function register(array $data)
    {
        $data['password'] = Hash::make($data['password']);
        return $this->userRepository->create($data);
    }

    // Logout User
    public function logout()
    {
        Auth::logout();
        return [
            'message' => 'Logout successful',
        ];
    }

    // Mendapatkan daftar Beasiswa
    public function getBeasiswa()
    {
        return $this->beasiswaRepository->getAll();
    }

    // Pendaftaran Beasiswa
    public function pendaftaran(array $data)
    {
        $data['user_id'] = Auth::id();
        $data['tanggal_daftar'] = now();
        $data['status'] = 'pending';

        return $this->pendaftaranRepository->create($data);
    }

    // Upload Dokumen Pendukung
    public function uploadDokumen(array $data)
    {
        $filePath = $data['file']->store('dokumen');
        
        $dokumenData = [
            'pendaftaran_id' => $data['pendaftaran_id'],
            'nama_dokumen' => $data['file']->getClientOriginalName(),
            'file_path' => $filePath,
            'status_verifikasi' => 'pending',
        ];

        return $this->dokumenPendukungRepository->create($dokumenData);
    }

    // Mendapatkan Notifikasi
    public function getNotifikasi()
    {
        // Ambil notifikasi berdasarkan user_id
        return $this->notifikasiRepository->getAll()->where('user_id', Auth::id());
    }
}

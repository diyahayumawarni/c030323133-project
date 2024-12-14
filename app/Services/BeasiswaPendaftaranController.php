<?php

namespace App\Services;

use App\Models\Beasiswa;
use App\Models\Pendaftaran;
use App\Models\DokumenPendukung;
use App\Models\Notifikasi;
use App\Models\ReviewPendaftaran;
use Illuminate\Support\Facades\Storage;

class BeasiswaPendaftaranService
{
    // Menampilkan daftar Beasiswa
    public function getBeasiswa()
    {
        return Beasiswa::all();  // Menggunakan Eloquent untuk mengambil semua beasiswa
    }

    // Menampilkan detail Beasiswa
    public function getBeasiswaById($id)
    {
        return Beasiswa::findOrFail($id);  // Menggunakan Eloquent untuk mencari Beasiswa berdasarkan ID
    }

    // Menambahkan Beasiswa
    public function createBeasiswa(array $data)
    {
        return Beasiswa::create($data);  // Menggunakan Eloquent untuk membuat Beasiswa baru
    }

    // Mengupdate Beasiswa
    public function updateBeasiswa($id, array $data)
    {
        $beasiswa = Beasiswa::findOrFail($id);  // Menggunakan Eloquent untuk menemukan Beasiswa
        $beasiswa->update($data);  // Mengupdate Beasiswa
        return $beasiswa;
    }

    // Menghapus Beasiswa
    public function deleteBeasiswa($id)
    {
        $beasiswa = Beasiswa::findOrFail($id);  // Menggunakan Eloquent untuk menemukan Beasiswa
        $beasiswa->delete();  // Menghapus Beasiswa
        return $beasiswa;
    }

    // Menampilkan daftar Pendaftaran
    public function getPendaftaran()
    {
        return Pendaftaran::with('beasiswa', 'user')->get();  // Menggunakan Eloquent untuk mengambil daftar Pendaftaran
    }

    // Menampilkan detail Pendaftaran
    public function getPendaftaranById($id)
    {
        return Pendaftaran::with('beasiswa', 'user')->findOrFail($id);  // Menggunakan Eloquent untuk menemukan Pendaftaran berdasarkan ID
    }

    // Menambahkan Pendaftaran
    public function createPendaftaran(array $data)
    {
        return Pendaftaran::create($data);  // Menggunakan Eloquent untuk membuat Pendaftaran baru
    }

    // Mengupdate Pendaftaran
    public function updatePendaftaran($id, array $data)
    {
        $pendaftaran = Pendaftaran::findOrFail($id);  // Menggunakan Eloquent untuk menemukan Pendaftaran
        $pendaftaran->update($data);  // Mengupdate Pendaftaran
        return $pendaftaran;
    }

    // Menghapus Pendaftaran
    public function deletePendaftaran($id)
    {
        $pendaftaran = Pendaftaran::findOrFail($id);  // Menggunakan Eloquent untuk menemukan Pendaftaran
        $pendaftaran->delete();  // Menghapus Pendaftaran
        return $pendaftaran;
    }

    // Menambahkan Dokumen Pendukung
    public function createDokumenPendukung(array $data)
    {
        $filePath = $data['file']->store('dokumen');  // Menyimpan file
        $dokumenData = [
            'pendaftaran_id' => $data['pendaftaran_id'],
            'nama_dokumen' => $data['file']->getClientOriginalName(),
            'file_path' => $filePath,
            'status_verifikasi' => 'pending',
        ];

        return DokumenPendukung::create($dokumenData);  // Menggunakan Eloquent untuk membuat Dokumen Pendukung baru
    }

    // Menampilkan daftar Dokumen Pendukung
    public function getDokumenPendukung()
    {
        return DokumenPendukung::all();  // Menggunakan Eloquent untuk mengambil semua Dokumen Pendukung
    }

    // Menampilkan detail Dokumen Pendukung
    public function getDokumenPendukungById($id)
    {
        return DokumenPendukung::findOrFail($id);  // Menggunakan Eloquent untuk menemukan Dokumen Pendukung berdasarkan ID
    }

    // Mengupdate Dokumen Pendukung
    public function updateDokumenPendukung($id, array $data)
    {
        $dokumenPendukung = DokumenPendukung::findOrFail($id);  // Menggunakan Eloquent untuk menemukan Dokumen Pendukung
        $dokumenPendukung->update($data);  // Mengupdate Dokumen Pendukung
        return $dokumenPendukung;
    }

    // Menghapus Dokumen Pendukung
    public function deleteDokumenPendukung($id)
    {
        $dokumenPendukung = DokumenPendukung::findOrFail($id);  // Menggunakan Eloquent untuk menemukan Dokumen Pendukung
        // Hapus file dari storage
        Storage::delete($dokumenPendukung->file_path);  
        $dokumenPendukung->delete();  // Menghapus Dokumen Pendukung
        return $dokumenPendukung;
    }

    // Menambahkan Review Pendaftaran
    public function createReviewPendaftaran(array $data)
    {
        return ReviewPendaftaran::create($data);  // Menggunakan Eloquent untuk membuat Review Pendaftaran baru
    }

    // Menampilkan daftar Review Pendaftaran
    public function getReviewPendaftaran()
    {
        return ReviewPendaftaran::with('pendaftaran', 'reviewer')->get();  // Menggunakan Eloquent untuk mengambil semua Review Pendaftaran
    }

    // Menampilkan detail Review Pendaftaran
    public function getReviewPendaftaranById($id)
    {
        return ReviewPendaftaran::findOrFail($id);  // Menggunakan Eloquent untuk menemukan Review Pendaftaran berdasarkan ID
    }

    // Mengupdate Review Pendaftaran
    public function updateReviewPendaftaran($id, array $data)
    {
        $reviewPendaftaran = ReviewPendaftaran::findOrFail($id);  // Menggunakan Eloquent untuk menemukan Review Pendaftaran
        $reviewPendaftaran->update($data);  // Mengupdate Review Pendaftaran
        return $reviewPendaftaran;
    }

    // Menghapus Review Pendaftaran
    public function deleteReviewPendaftaran($id)
    {
        $reviewPendaftaran = ReviewPendaftaran::findOrFail($id);  // Menggunakan Eloquent untuk menemukan Review Pendaftaran
        $reviewPendaftaran->delete();  // Menghapus Review Pendaftaran
        return $reviewPendaftaran;
    }

    // Menambahkan Notifikasi
    public function createNotifikasi(array $data)
    {
        return Notifikasi::create($data);  // Menggunakan Eloquent untuk membuat Notifikasi baru
    }

    // Menampilkan daftar Notifikasi
    public function getNotifikasi()
    {
        return Notifikasi::all();  // Menggunakan Eloquent untuk mengambil semua Notifikasi
    }

    // Mengupdate Notifikasi
    public function updateNotifikasi($id, array $data)
    {
        $notifikasi = Notifikasi::findOrFail($id);  // Menggunakan Eloquent untuk menemukan Notifikasi
        $notifikasi->update($data);  // Mengupdate Notifikasi
        return $notifikasi;
    }

    // Menghapus Notifikasi
    public function deleteNotifikasi($id)
    {
        $notifikasi = Notifikasi::findOrFail($id);  // Menggunakan Eloquent untuk menemukan Notifikasi
        $notifikasi->delete();  // Menghapus Notifikasi
        return $notifikasi;
    }
}

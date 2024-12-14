<?php

namespace App\Http\Controllers;

use App\Models\Beasiswa;
use App\Models\Pendaftaran;
use App\Models\DokumenPendukung;
use App\Models\Notifikasi;
use App\Models\ReviewPendaftaran;
use Illuminate\Http\Request;

class BeasiswaPendaftaranController extends Controller
{
    
    // BEASISWA - Menampilkan daftar beasiswa
    public function indexBeasiswa()
    {
        $beasiswas = Beasiswa::all();
        return response()->json($beasiswas);
    }

    // BEASISWA - Menampilkan detail beasiswa
    public function showBeasiswa($id)
    {
        $beasiswa = Beasiswa::findOrFail($id);
        return response()->json($beasiswa);
    }

    // Pendaftaran - Menampilkan daftar pendaftaran
    public function indexPendaftaran()
    {
        $pendaftarans = Pendaftaran::with('beasiswa', 'user')->get();
        return response()->json($pendaftarans);
    }

    // Pendaftaran - Menampilkan detail pendaftaran
    public function showPendaftaran($id)
    {
        $pendaftaran = Pendaftaran::with('beasiswa', 'user')->findOrFail($id);
        return response()->json($pendaftaran);
    }

    // DOKUMEN PENDUKUNG - Menampilkan daftar dokumen pendukung
    public function indexDokumenPendukung()
    {
        $dokumenPendukung = DokumenPendukung::with('pendaftaran')->get();
        return response()->json($dokumenPendukung);
    }

    // DOKUMEN PENDUKUNG - Menampilkan detail dokumen pendukung
    public function showDokumenPendukung($id)
    {
        $dokumenPendukung = DokumenPendukung::with('pendaftaran')->findOrFail($id);
        return response()->json($dokumenPendukung);
    }

    // NOTIFIKASI - Menampilkan daftar notifikasi
    public function indexNotifikasi()
    {
        $notifikasis = Notifikasi::with('user')->get();
        return response()->json($notifikasis);
    }

    // REVIEW PENDAFTRAN - Menampilkan daftar review pendaftaran
    public function indexReviewPendaftaran()
    {
        $reviews = ReviewPendaftaran::with('pendaftaran', 'reviewer')->get();
        return response()->json($reviews);
    }

    // Menambahkan Beasiswa
    public function storeBeasiswa(Request $request)
    {
        $request->validate([
            'nama_beasiswa' => 'required|string',
            'deskripsi' => 'required|string',
            'kuota' => 'required|integer',
            'batas_pendaftaran' => 'required|date',
            'ipk_minimum' => 'required|numeric',
            'usia_maximum' => 'required|integer',
            'user_id' => 'required|exists:users,id'
        ]);

        $beasiswa = Beasiswa::create($request->all());
        return response()->json($beasiswa, 201);
    }

    // Menambahkan Pendaftaran
    public function storePendaftaran(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'beasiswa_id' => 'required|exists:beasiswas,id',
            'tanggal_daftar' => 'required|date',
            'status' => 'required|string'
        ]);

        $pendaftaran = Pendaftaran::create($request->all());
        return response()->json($pendaftaran, 201);
    }

    // Menambahkan Dokumen Pendukung
    public function storeDokumenPendukung(Request $request)
    {
        $request->validate([
            'pendaftaran_id' => 'required|exists:pendaftarans,id',
            'nama_dokumen' => 'required|string',
            'file_path' => 'required|string',
            'status_verifikasi' => 'required|string'
        ]);

        $dokumenPendukung = DokumenPendukung::create($request->all());
        return response()->json($dokumenPendukung, 201);
    }

    // Menambahkan Review Pendaftaran
    public function storeReviewPendaftaran(Request $request)
    {
        $request->validate([
            'pendaftaran_id' => 'required|exists:pendaftarans,id',
            'reviewer_id' => 'required|exists:users,id',
            'catatan_review' => 'nullable|string',
            'hasil_review' => 'required|string'
        ]);

        $review = ReviewPendaftaran::create($request->all());
        return response()->json($review, 201);
    }

    // Menambahkan Notifikasi
    public function storeNotifikasi(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'judul' => 'required|string',
            'pesan' => 'required|string',
            'status' => 'required|string'
        ]);

        $notifikasi = Notifikasi::create($request->all());
        return response()->json($notifikasi, 201);
    }

    // Mengupdate Beasiswa
    public function updateBeasiswa(Request $request, $id)
    {
        $beasiswa = Beasiswa::findOrFail($id);
        $beasiswa->update($request->all());
        return response()->json($beasiswa);
    }

    // Mengupdate Pendaftaran
    public function updatePendaftaran(Request $request, $id)
    {
        $pendaftaran = Pendaftaran::findOrFail($id);
        $pendaftaran->update($request->all());
        return response()->json($pendaftaran);
    }

    // Mengupdate Dokumen Pendukung
    public function updateDokumenPendukung(Request $request, $id)
    {
        $dokumenPendukung = DokumenPendukung::findOrFail($id);
        $dokumenPendukung->update($request->all());
        return response()->json($dokumenPendukung);
    }

    // Mengupdate Review Pendaftaran
    public function updateReviewPendaftaran(Request $request, $id)
    {
        $review = ReviewPendaftaran::findOrFail($id);
        $review->update($request->all());
        return response()->json($review);
    }

    // Mengupdate Notifikasi
    public function updateNotifikasi(Request $request, $id)
    {
        $notifikasi = Notifikasi::findOrFail($id);
        $notifikasi->update($request->all());
        return response()->json($notifikasi);
    }

    // Menghapus Beasiswa
    public function destroyBeasiswa($id)
    {
        $beasiswa = Beasiswa::findOrFail($id);
        $beasiswa->delete();
        return response()->json(['message' => 'Beasiswa deleted successfully']);
    }

    // Menghapus Pendaftaran
    public function destroyPendaftaran($id)
    {
        $pendaftaran = Pendaftaran::findOrFail($id);
        $pendaftaran->delete();
        return response()->json(['message' => 'Pendaftaran deleted successfully']);
    }

    // Menghapus Dokumen Pendukung
    public function destroyDokumenPendukung($id)
    {
        $dokumenPendukung = DokumenPendukung::findOrFail($id);
        $dokumenPendukung->delete();
        return response()->json(['message' => 'Dokumen Pendukung deleted successfully']);
    }

    // Menghapus Review Pendaftaran
    public function destroyReviewPendaftaran($id)
    {
        $review = ReviewPendaftaran::findOrFail($id);
        $review->delete();
        return response()->json(['message' => 'Review deleted successfully']);
    }

    // Menghapus Notifikasi
    public function destroyNotifikasi($id)
    {
        $notifikasi = Notifikasi::findOrFail($id);
        $notifikasi->delete();
        return response()->json(['message' => 'Notifikasi deleted successfully']);
    }
}
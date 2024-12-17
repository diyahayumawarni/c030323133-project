@extends('layouts.app')

@section('title', 'Edit Dokumen Pendukung')

@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-header bg-warning text-white">
            <h4>Edit Dokumen Pendukung</h4>
        </div>
        <div class="card-body">
            <!-- Notifikasi Jika Ada Pesan -->
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <!-- Form Edit Dokumen -->
            <form action="{{ route('dokumen.update', $dokumen->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- ID Pendaftaran -->
                <div class="mb-3">
                    <label for="pendaftaran_id" class="form-label">ID Pendaftaran</label>
                    <input type="number" name="pendaftaran_id" id="pendaftaran_id" class="form-control @error('pendaftaran_id') is-invalid @enderror" value="{{ old('pendaftaran_id', $dokumen->pendaftaran_id) }}" required>
                    @error('pendaftaran_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Nama Dokumen -->
                <div class="mb-3">
                    <label for="nama_dokumen" class="form-label">Nama Dokumen</label>
                    <input type="text" name="nama_dokumen" id="nama_dokumen" class="form-control @error('nama_dokumen') is-invalid @enderror" value="{{ old('nama_dokumen', $dokumen->nama_dokumen) }}" required>
                    @error('nama_dokumen')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Unggah File -->
                <div class="mb-3">
                    <label for="file" class="form-label">Unggah Dokumen (Biarkan kosong jika tidak diubah)</label>
                    <input type="file" name="file" id="file" class="form-control @error('file') is-invalid @enderror" accept=".pdf,.jpeg,.png,.jpg">
                    <small class="text-muted">File saat ini: <a href="{{ asset('storage/' . $dokumen->file_path) }}" target="_blank">Lihat File</a></small>
                    @error('file')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Status Verifikasi -->
                <div class="mb-3">
                    <label for="status_verifikasi" class="form-label">Status Verifikasi</label>
                    <select name="status_verifikasi" id="status_verifikasi" class="form-control @error('status_verifikasi') is-invalid @enderror">
                        <option value="belum" {{ $dokumen->status_verifikasi == 'belum' ? 'selected' : '' }}>Belum Diverifikasi</option>
                        <option value="sudah" {{ $dokumen->status_verifikasi == 'sudah' ? 'selected' : '' }}>Sudah Diverifikasi</option>
                    </select>
                    @error('status_verifikasi')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Tombol Submit -->
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-warning">Simpan Perubahan</button>
                    <a href="{{ route('dokumen.index') }}" class="btn btn-secondary ms-2">Batal</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Dokumen Pendukung</h1>

    <form action="{{ route('dokumen.update', $dokumenPendukung->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nama_dokumen" class="form-label">Nama Dokumen</label>
            <input type="text" class="form-control" id="nama_dokumen" name="nama_dokumen" value="{{ $dokumenPendukung->nama_dokumen }}" required>
        </div>

        <div class="mb-3">
            <label for="file" class="form-label">File Dokumen</label>
            <input type="file" class="form-control" id="file" name="file" accept="application/pdf,image/*">
            <small>File yang sudah ada: {{ $dokumenPendukung->file_path }}</small>
        </div>

        <div class="mb-3">
            <label for="status_verifikasi" class="form-label">Status Verifikasi</label>
            <select class="form-select" id="status_verifikasi" name="status_verifikasi" required>
                <option value="belum" {{ $dokumenPendukung->status_verifikasi == 'belum' ? 'selected' : '' }}>Belum Diverifikasi</option>
                <option value="sudah" {{ $dokumenPendukung->status_verifikasi == 'sudah' ? 'selected' : '' }}>Sudah Diverifikasi</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update Dokumen</button>
    </form>
</div>
@endsection

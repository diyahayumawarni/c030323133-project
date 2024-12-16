@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center mb-4">Upload Dokumen Pendukung</h1>

    <!-- Menampilkan pesan sukses jika ada -->
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <!-- Form Upload Dokumen Pendukung -->
    <form action="{{ route('dokumen.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="pendaftaran_id" class="form-label">ID Pendaftaran</label>
            <input type="text" class="form-control" name="pendaftaran_id" id="pendaftaran_id" placeholder="Masukkan ID Pendaftaran" value="{{ old('pendaftaran_id') }}" required>
            @error('pendaftaran_id')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="nama_dokumen" class="form-label">Nama Dokumen</label>
            <input type="text" class="form-control" name="nama_dokumen" id="nama_dokumen" placeholder="Masukkan nama dokumen" value="{{ old('nama_dokumen') }}" required>
            @error('nama_dokumen')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="file_path" class="form-label">Upload File</label>
            <input type="file" class="form-control" name="file" id="file_path" accept=".pdf,.doc,.docx,.jpg,.png" required>
            @error('file')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-success w-100">Upload Dokumen</button>
    </form>
</div>
@endsection

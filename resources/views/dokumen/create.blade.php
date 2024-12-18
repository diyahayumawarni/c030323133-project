@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Dokumen Pendukung</h1>

    <!-- Form untuk tambah dokumen -->
    <form action="{{ route('dokumen.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Input Pendaftaran ID -->
        <div class="form-group">
            <label for="pendaftaran_id">ID Pendaftaran</label>
            <input type="number" id="pendaftaran_id" name="pendaftaran_id" placeholder="Masukkan ID Pendaftaran" value="{{ old('pendaftaran_id') }}" required>
            @error('pendaftaran_id')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <!-- Input Nama Dokumen -->
        <div class="form-group">
            <label for="nama_dokumen">Nama Dokumen</label>
            <input type="text" id="nama_dokumen" name="nama_dokumen" placeholder="Masukkan Nama Dokumen" value="{{ old('nama_dokumen') }}" required>
            @error('nama_dokumen')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <!-- Input File Dokumen -->
        <div class="form-group">
            <label for="file">File Dokumen</label>
            <input type="file" id="file" name="file" accept=".pdf,.jpeg,.png,.jpg" required>
            @error('file')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <!-- Submit Button -->
        <div class="actions">
            <button type="submit" class="btn">Tambah Dokumen</button>
            <a href="{{ route('dokumen.index') }}" class="btn danger">Batal</a>
        </div>
    </form>
</div>
@endsection
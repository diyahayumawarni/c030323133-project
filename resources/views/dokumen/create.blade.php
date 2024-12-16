@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Tambah Dokumen Pendukung</h1>

        <form action="{{ route('dokumen.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Pilih Pendaftaran -->
            <div class="form-group">
                <label for="pendaftaran_id">ID Pendaftaran</label>
                <select name="pendaftaran_id" id="pendaftaran_id" class="form-control" required>
                    <option value="">-- Pilih ID Pendaftaran --</option>
                    @foreach($pendaftarans as $pendaftaran)
                        <option value="{{ $pendaftaran->id }}">ID: {{ $pendaftaran->id }} - {{ $pendaftaran->user->name ?? 'Nama tidak tersedia' }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Nama Dokumen -->
            <div class="form-group">
                <label for="nama_dokumen">Nama Dokumen</label>
                <input type="text" class="form-control" name="nama_dokumen" id="nama_dokumen" placeholder="Masukkan Nama Dokumen" required>
            </div>

            <!-- Unggah Dokumen -->
            <div class="form-group">
                <label for="file_path">Unggah Dokumen</label>
                <input type="file" class="form-control" name="file_path" id="file_path" required>
            </div>

            <!-- Tombol Simpan -->
            <button type="submit" class="btn btn-primary">Simpan Dokumen</button>
        </form>
    </div>
@endsection

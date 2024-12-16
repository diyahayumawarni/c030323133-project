@extends('layouts.app')

@section('content')
    <h1>Unggah Dokumen Pendukung</h1>

    <form action="{{ route('dokumen.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="nama_dokumen">Nama Dokumen</label>
            <input type="text" class="form-control" id="nama_dokumen" name="nama_dokumen" required>
        </div>

        <div class="form-group">
            <label for="file">File Dokumen</label>
            <input type="file" class="form-control" id="file" name="file" required>
        </div>

        <input type="hidden" name="pendaftaran_id" value="{{ $pendaftaran->id }}">
        
        <button type="submit" class="btn btn-primary">Unggah</button>
    </form>
@endsection

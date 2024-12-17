@extends('layouts.app')

@section('title', 'Daftar Dokumen Pendukung')

@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-header bg-primary text-white">
            Daftar Dokumen Pendukung
        </div>
        <div class="card-body">
            <!-- Tabel Daftar Dokumen -->
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>ID Pendaftaran</th>
                            <th>Nama Dokumen</th>
                            <th>Path Dokumen</th>
                            <th>Status Verifikasi</th>
                            <th>Dibuat Pada</th>
                            <th>Diperbarui Pada</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dokumens as $dokumen)
                        <tr>
                            <td>{{ $dokumen->id }}</td>
                            <td>{{ $dokumen->pendaftaran_id }}</td>
                            <td>{{ $dokumen->nama_dokumen }}</td>
                            <td>{{ Str::limit($dokumen->file_path, 30) }}</td>
                            <td>
                                <span class="badge 
                                    @if($dokumen->status_verifikasi == 'belum') 
                                        badge-danger 
                                    @else
                                        badge-success 
                                    @endif
                                    ">
                                    {{ $dokumen->status_verifikasi == 'belum' ? 'Belum Diverifikasi' : 'Sudah Diverifikasi' }}
                                </span>
                            </td>
                            <td>{{ $dokumen->created_at->format('d-m-Y H:i') }}</td>
                            <td>{{ $dokumen->updated_at->format('d-m-Y H:i') }}</td>
                            <td>
                                <form action="{{ route('dokumen.destroy', $dokumen->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus dokumen ini?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- Tombol untuk menambah dokumen baru -->
            <div class="mt-3">
                <a href="{{ route('dokumen.create') }}" class="btn btn-success">Tambah Dokumen Pendukung</a>
            </div>
        </div>
    </div>
</div>
@endsection

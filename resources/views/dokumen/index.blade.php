@extends('layouts.app')

@section('title', 'Daftar Dokumen Pendukung')

@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-header" style="background-color: #f8bbd0; color: white;">
            Daftar Dokumen Pendukung
        </div>
        <div class="card-body" style="background-color: #fce4ec;">
            <!-- Tampilkan pesan sukses -->
            @if(session('success'))
                <div class="alert alert-success" style="background-color: #f48fb1; color: white;">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Tabel Daftar Dokumen -->
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead style="background-color: #f8bbd0; color: white;">
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
                                <span @class([
                                    'badge', 
                                    $dokumen->status_verifikasi == 'belum' ? 'bg-danger' : 'bg-success'
                                ])>
                                    {{ $dokumen->status_verifikasi == 'belum' ? 'Belum Diverifikasi' : 'Sudah Diverifikasi' }}
                                </span>
                            </td>
                            <td>{{ $dokumen->created_at->format('d-m-Y H:i') }}</td>
                            <td>{{ $dokumen->updated_at->format('d-m-Y H:i') }}</td>
                            <td>
                                <form action="{{ route('dokumen.destroy', $dokumen->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus dokumen ini?')" style="background-color: #f48fb1; border: none; color: white;">
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Tombol Kembali ke Home -->
            <div class="text-center mt-4">
                <a href="{{ route('home') }}" class="btn btn-secondary" style="background-color: #f48fb1; color: white; border: none;">
                    Kembali ke Home
                </a>
            </div>
        </div> 
    </div>
</div>
@endsection

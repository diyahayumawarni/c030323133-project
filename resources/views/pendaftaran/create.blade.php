@extends('layouts.app') <!-- Menggunakan layout utama -->

@section('content')
<div class="container mt-5">
    <h2>Daftar Beasiswa</h2>
    <div class="card">
        <div class="card-body">
            <!-- Tampilkan Pesan Sukses atau Error -->
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Form Pendaftaran -->
            <form action="{{ route('pendaftaran') }}" method="POST">
                @csrf <!-- Token CSRF -->

                <!-- Field User ID (Hidden karena diambil otomatis dari user login) -->
                <input type="hidden" name="user_id" value="{{ Auth::id() }}">

                <!-- Pilih Beasiswa -->
                <div class="form-group mb-3">
                    <label for="beasiswa_id">Pilih Beasiswa</label>
                    <select name="beasiswa_id" id="beasiswa_id" class="form-control" required>
                        <option value="">-- Pilih Beasiswa --</option>
                        @foreach ($beasiswas as $beasiswa)
                            <option value="{{ $beasiswa->id }}">{{ $beasiswa->nama_beasiswa }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Tombol Submit -->
                <div class="form-group mt-4">
                    <button type="submit" class="btn btn-primary">Daftar</button>
                    <a href="{{ route('home') }}" class="btn btn-secondary">Batal</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

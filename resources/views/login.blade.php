@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="card shadow p-4" style="width: 100%; max-width: 400px; border-radius: 15px;">
        <div class="text-center mb-4">
            <h2 class="fw-bold">Login</h2>
            <p class="text-muted">Masuk ke akun Anda untuk melanjutkan</p>
        </div>

        <!-- Menampilkan pesan sukses jika ada -->
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <!-- Menampilkan error jika ada -->
        @if($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <ul class="mb-0">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <form action="{{ route('login') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required placeholder="Masukkan email Anda">
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required placeholder="Masukkan password Anda">
            </div>

            <button type="submit" class="btn btn-primary w-100">Login</button>

            <!-- Tambahkan tombol untuk register -->
            <div class="text-center mt-4">
                <p class="mb-0">Belum memiliki akun? <a href="{{ route('register.form') }}" class="text-decoration-none">Daftar Sekarang</a></p>
            </div>
        </form>
    </div>
</div>
@endsection

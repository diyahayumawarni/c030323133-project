@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh; background: linear-gradient(135deg, #f8bbd0, #ffccbc);">
    <div class="card p-4 shadow-lg" style="width: 100%; max-width: 500px; border-radius: 10px; background-color: #fff3e0;">
        <h2 class="text-center fw-bold mb-4" style="color: #d81b60;">Daftar Akun</h2>
        <p class="text-center text-muted">Buat akun Anda untuk mengakses sistem informasi penerimaan beasiswa</p>

        <!-- Menampilkan error jika ada -->
        @if($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert" style="background-color: #ff8a80; color: white;">
                <ul class="mb-0">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <form action="{{ route('register') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required style="border-color: #f48fb1;">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required style="border-color: #f48fb1;">
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required style="border-color: #f48fb1;">
            </div>

            <button type="submit" class="btn" style="background-color: #f48fb1; color: white; width: 100%;">Daftar</button>
        </form>

        <div class="text-center mt-4">
            <p class="text-muted">Sudah memiliki akun? <a href="{{ route('login.form') }}" class="fw-bold" style="color: #f48fb1;">Login</a></p>
        </div>
    </div>
</div>
@endsection

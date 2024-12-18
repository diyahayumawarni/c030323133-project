<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Sistem Beasiswa') }}</title>
    
    <!-- Link CSS Bootstrap untuk tata letak responsif dan style yang modern -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- CSS tambahan jika ada -->
</head>
<body>

    <!-- Navbar (Navigasi) -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('home') }}">Sistem Beasiswa</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('beasiswa.index') }}">Beasiswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('pendaftaran.index') }}">Pendaftaran</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dokumen.index') }}">Dokumen</a>
                    </li>
                    
                    <!-- Form Logout -->
                    @if(auth()->check())
                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                            @csrf
                            <button type="submit" class="btn btn-link nav-link">Logout</button>
                        </form>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    <!-- Konten Halaman -->
    <div class="container my-4">
        @yield('content') <!-- Tempat untuk konten halaman lain -->
    </div>

    <!-- Footer -->
    <footer class="bg-light text-center py-4">
        <p>&copy; 2024 Sistem Penerimaan Beasiswa. All Rights Reserved.</p>
    </footer>

    <!-- Script Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script> <!-- JS tambahan jika ada -->
</body>
</html>

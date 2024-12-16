<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Beasiswa</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #e6f7ff;
            color: #333;
            margin: 0;
            padding: 0;
        }

        /* Navbar */
        .navbar {
            background-color: #0099cc; /* Biru yang lebih tegas */
            color: white;
            padding: 15px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .navbar a {
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            margin: 0 15px;
            font-weight: bold;
            text-transform: uppercase;
        }

        .navbar a:hover {
            background-color: #0077b3;
            border-radius: 5px;
        }

        /* Main content */
        .container {
            padding: 30px;
            max-width: 1200px;
            margin: 0 auto;
        }

        h1 {
            font-size: 36px;
            color: #0077b3;
            text-align: center;
            margin-bottom: 20px;
        }

        .row {
            display: flex;
            justify-content: space-between;
            margin-top: 30px;
        }

        .col-md-6 {
            width: 48%;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h3 {
            color: #0099cc;
            font-size: 24px;
            margin-bottom: 15px;
        }

        p, ul {
            font-size: 16px;
            color: #555;
            line-height: 1.6;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 10px;
        }

        .btn {
            background-color: #0099cc;
            color: white;
            padding: 12px 30px;
            border: none;
            border-radius: 5px;
            text-transform: uppercase;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
            text-align: center;
            display: inline-block;
            margin-top: 20px;
        }

        .btn:hover {
            background-color: #0077b3;
        }

        /* Responsif */
        @media (max-width: 768px) {
            .row {
                flex-direction: column;
                align-items: center;
            }

            .col-md-6 {
                width: 100%;
                margin-bottom: 20px;
            }

            h1 {
                font-size: 28px;
            }

            h3 {
                font-size: 20px;
            }
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <div class="navbar">
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('beasiswa.index') }}">Beasiswa</a>
        <a href="{{ route('pendaftaran.index') }}">Pendaftaran</a>
        <a href="{{ route('dokumen.index') }}">Dokumen</a>
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
    </div>

    <!-- Main Content -->
    <div class="container">
        <h1>Detail Beasiswa: {{ $beasiswa->nama_beasiswa }}</h1>
        
        <div class="row">
            <!-- Deskripsi Beasiswa -->
            <div class="col-md-6">
                <h3>Deskripsi</h3>
                <p>{{ $beasiswa->deskripsi }}</p>
            </div>

            <!-- Informasi Beasiswa -->
            <div class="col-md-6">
                <h3>Informasi Beasiswa</h3>
                <ul>
                    <li><strong>IPK Minimum:</strong> {{ $beasiswa->ipk_minimum }}</li>
                    <li><strong>Usia Maksimum:</strong> {{ $beasiswa->usia_maximum }}</li>
                    <li><strong>Kuota:</strong> {{ $beasiswa->kuota }}</li>
                    <li><strong>Batas Pendaftaran:</strong> {{ \Carbon\Carbon::parse($beasiswa->batas_pendaftaran)->format('d F Y') }}</li>
                    <li><strong>Penyelenggara:</strong> {{ $beasiswa->user->name ?? 'Tidak tersedia' }}</li>
                </ul>
            </div>
        </div>

        <a href="{{ route('beasiswa.index') }}" class="btn btn-primary mt-4">Kembali ke Daftar Beasiswa</a>
    </div>

</body>
</html>

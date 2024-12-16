<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f8ff; /* Latar belakang biru muda */
            color: #333;
            height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* Navbar */
        .navbar {
            background-color: #0077b3; /* Biru yang lebih gelap */
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
            background-color: #005f87; /* Biru lebih gelap untuk hover */
            border-radius: 5px;
        }

        /* Main Content */
        .container {
            display: flex;
            flex-direction: row; /* Menggunakan flexbox untuk tata letak horizontal */
            justify-content: space-between;
            padding: 20px;
            margin-top: 30px;
        }

        /* Personal Information Section */
        .personal-info-section {
            width: 30%; /* Menetapkan lebar 30% dari kontainer untuk personal info */
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            margin-right: 20px;
        }

        .personal-info-section h2 {
            font-size: 36px;
            color: #0077b3;
            margin-bottom: 20px;
        }

        .personal-info-card {
            background-color: #f9f9f9;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .personal-info-card h3 {
            font-size: 24px;
            color: #0077b3;
            margin-bottom: 10px;
        }

        .personal-info-card p {
            font-size: 18px;
            color: #555;
        }

        .personal-info-card span {
            font-weight: bold;
        }

        /* Description Section */
        .description-section {
            width: 65%; /* Menetapkan lebar 65% dari kontainer untuk deskripsi */
            background-color: #ffffff;
            padding: 40px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .description-section h2 {
            font-size: 36px;
            color: #0077b3;
            margin-bottom: 20px;
        }

        .description-section p {
            font-size: 18px;
            color: #555;
            line-height: 1.8;
        }

        /* Logout Button */
        .logout-button {
            background-color: #ff4c4c;
            color: white;
            padding: 12px 25px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 30px;
            transition: background-color 0.3s ease;
            text-align: center;
            display: inline-block;
        }

        .logout-button:hover {
            background-color: #e60000;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .container {
                flex-direction: column; /* Menjadi kolom pada perangkat kecil */
            }

            .personal-info-section, .description-section {
                width: 100%; /* Lebar 100% untuk kedua bagian */
                margin-right: 0;
                margin-bottom: 20px;
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
        <!-- Personal Information Section -->
        <div class="personal-info-section">
            <h2>Personal Information</h2>
            <div class="personal-info-card">
                <h3>Diyah Ayu Mawarni</h3>
                <p><span>NIM:</span> C030323133</p>
                <p><span>Kelas:</span> TI-3Axioo</p>
            </div>
            <div class="personal-info-card">
                <h3>Noor Alfa Rahmah</h3>
                <p><span>NIM:</span> C030323146</p>
                <p><span>Kelas:</span> TI-3Axioo</p>
            </div>
        </div>

        <!-- Description Section -->
        <div class="description-section">
            <h2>Sistem Informasi Penerimaan Beasiswa</h2>
            <p>
                Sistem Informasi Penerimaan Beasiswa (SIPB) adalah aplikasi berbasis web yang dirancang untuk mempermudah proses penerimaan beasiswa di berbagai institusi pendidikan. Sistem ini memungkinkan calon penerima beasiswa untuk mendaftar, mengunggah dokumen pendukung, dan melacak status aplikasi mereka.
            </p>
            <p>
                Melalui SIPB, calon penerima beasiswa dapat mengakses berbagai informasi terkait program beasiswa yang tersedia, mulai dari persyaratan hingga cara pendaftaran. Dengan sistem yang terintegrasi, diharapkan proses seleksi dan verifikasi dapat berjalan lebih transparan, efisien, dan akurat.
            </p>
            <p>
                Sistem ini juga memberikan kemudahan bagi pihak pengelola beasiswa untuk memonitor pendaftaran, mengelola dokumen, serta memberikan notifikasi terkait status aplikasi kepada para pendaftar.
            </p>

            <!-- Logout Button -->
            <button class="logout-button" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</button>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </div>

</body>
</html>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Beasiswa</title>
    <!-- Menggunakan Bootstrap 5 dan beberapa CSS kustom -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Background dengan warna pink muda untuk halaman */
        body {
            background-color: #FCE4EC; /* Latar belakang pink muda */
            font-family: 'Arial', sans-serif;
        }

        /* Desain header dengan warna pink elegan */
        h1 {
            color: #F06292; /* Pink elegan untuk judul */
            font-weight: bold;
            margin-bottom: 30px;
        }

        /* Desain untuk tabel */
        .table {
            background-color: #FFFFFF; /* Putih untuk latar belakang tabel */
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Header tabel */
        th {
            background-color: #F06292; /* Pink elegan untuk header tabel */
            color: white;
        }

        /* Alternatif warna baris tabel */
        tr:nth-child(even) {
            background-color: #F8BBD0; /* Pink muda untuk baris genap */
        }

        tr:nth-child(odd) {
            background-color: #F48FB1; /* Pink lebih gelap untuk baris ganjil */
        }

        /* Styling untuk tombol */
        .btn-info {
            background-color: #F06292; /* Pink elegan untuk tombol */
            border-color: #F06292;
        }

        .btn-info:hover {
            background-color: #EC407A; /* Pink lebih gelap pada hover */
            border-color: #EC407A;
        }
    </style>
</head>
<body>
    <div class="container my-5">
        <h1 class="text-center">Daftar Beasiswa</h1>

        <!-- Tabel Daftar Beasiswa -->
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama Beasiswa</th>
                    <th>Deskripsi</th>
                    <th>Kuota</th>
                    <th>Batas Pendaftaran</th>
                    <th>IPK Minimum</th>
                    <th>Usia Maksimum</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($beasiswas as $beasiswa)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $beasiswa->nama_beasiswa }}</td>
                        <td>{{ $beasiswa->deskripsi }}</td>
                        <td>{{ $beasiswa->kuota }}</td>
                        <td>{{ \Carbon\Carbon::parse($beasiswa->batas_pendaftaran)->format('d M Y') }}</td>
                        <td>{{ $beasiswa->ipk_minimum }}</td>
                        <td>{{ $beasiswa->usia_maximum }}</td>
                        <td>
                            <!-- Tombol untuk melihat detail beasiswa -->
                            <a href="{{ route('beasiswa.show', $beasiswa->id) }}" class="btn btn-info btn-sm">Lihat Detail</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

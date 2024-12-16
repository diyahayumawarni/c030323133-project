<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Beasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
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
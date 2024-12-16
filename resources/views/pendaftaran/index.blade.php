<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pendaftaran</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
            color: #333;
        }

        .container {
            max-width: 1200px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h1 {
            text-align: center;
            color: #0077b3;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table th, table td {
            border: 1px solid #ddd;
            padding: 12px 15px;
            text-align: left;
        }

        table th {
            background-color: #0077b3;
            color: white;
            text-transform: uppercase;
            font-size: 14px;
        }

        table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        table tr:hover {
            background-color: #e9f5ff;
        }

        .add-button {
            display: inline-block;
            margin-bottom: 20px;
            padding: 10px 15px;
            background-color: #28a745;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
        }

        .add-button:hover {
            background-color: #218838;
        }

    </style>
</head>
<body>
    <div class="container">
        <h1>Data Pendaftaran Beasiswa</h1>

        <!-- Tombol "Tambah Pendaftaran" -->
        <a href="{{ route('pendaftaran.create') }}" class="add-button">Tambah Pendaftaran</a> <!-- Menggunakan route pendaftaran.create -->

        <!-- Pesan setelah tambah pendaftaran sukses -->
        @if(session('success'))
            <div style="background-color: #28a745; color: white; padding: 10px; margin-bottom: 20px;">
                {{ session('success') }}
            </div>
        @endif

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>User</th>
                    <th>Tanggal Mendaftar</th>
                    <th>Beasiswa</th>
                    <th>Status</th>
                    <th>Diperbaharui</th>
                    <th>Dibuat Pada</th>
                    <th>Aksi</th> <!-- Tambahkan kolom aksi untuk show atau edit -->
                </tr>
            </thead>
            <tbody>
                @forelse($pendaftaran as $data)
                    <tr>
                        <td>{{ $data->id }}</td>
                        <td>{{ $data->user->name ?? 'N/A' }}</td> <!-- Properti nama user -->
                        <td>{{ $data->tanggal_mendaftar }}</td>
                        <td>{{ $data->beasiswa->nama_beasiswa ?? 'N/A' }}</td> <!-- Properti nama beasiswa -->
                        <td>{{ $data->status }}</td>
                        <td>{{ $data->updated_at }}</td>
                        <td>{{ $data->created_at }}</td>
                        <td>
                            <!-- Tautan untuk melihat detail pendaftaran -->
                            <a href="{{ route('pendaftaran.show', $data->id) }}" class="btn btn-info">Lihat</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8" class="text-center">Data tidak tersedia</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>
</html>

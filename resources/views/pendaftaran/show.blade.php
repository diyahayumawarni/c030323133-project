<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pendaftaran</title>
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
            max-width: 900px;
            margin: 40px auto;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h1 {
            font-size: 32px;
            color: #0077b3;
            margin-bottom: 20px;
        }

        .info {
            margin-bottom: 20px;
            padding: 10px 15px;
            background-color: #f9f9f9;
            border-left: 4px solid #0077b3;
        }

        .info p {
            margin: 5px 0;
            font-size: 18px;
            color: #555;
        }

        .info span {
            font-weight: bold;
            color: #333;
        }

        .actions {
            margin-top: 20px;
            text-align: right;
        }

        .actions .btn {
            background-color: #0077b3;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            cursor: pointer;
            font-size: 16px;
            margin-left: 10px;
        }

        .actions .btn:hover {
            background-color: #005f87;
        }

        .actions .btn.danger {
            background-color: #ff4c4c;
        }

        .actions .btn.danger:hover {
            background-color: #e60000;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Detail Pendaftaran Beasiswa</h1>

        <div class="info">
            <p><span>ID Pendaftaran:</span> {{ $pendaftaran->id }}</p>
            <p><span>Nama User:</span> {{ $pendaftaran->user->name ?? 'N/A' }}</p>
            <p><span>Tanggal Mendaftar:</span> {{ $pendaftaran->tanggal_mendaftar }}</p>
            <p><span>Beasiswa:</span> {{ $pendaftaran->beasiswa->nama_beasiswa ?? 'N/A' }}</p>
            <p><span>Status:</span> {{ $pendaftaran->status }}</p>
            <p><span>Dibuat Pada:</span> {{ $pendaftaran->created_at }}</p>
            <p><span>Diperbaharui Pada:</span> {{ $pendaftaran->updated_at }}</p>
        </div>

        <div class="actions">
            <a href="{{ route('pendaftaran.edit', $pendaftaran->id) }}" class="btn">Edit</a>
            <form action="{{ route('pendaftaran.destroy', $pendaftaran->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn danger" onclick="return confirm('Apakah Anda yakin ingin menghapus pendaftaran ini?')">Hapus</button>
            </form>
            <a href="{{ route('pendaftaran.index') }}" class="btn">Kembali ke Daftar Pendaftaran</a>
        </div>
    </div>
</body>
</html>


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
        <h1>Detail Pendaftaran</h1>

        <div class="info">
            <p><span>ID Pendaftaran:</span> {{ $pendaftaran->id }}</p>
            <p><span>Nama User:</span> {{ $pendaftaran->nama_user }}</p>
            <p><span>Tanggal Mendaftar:</span> {{ \Carbon\Carbon::parse($pendaftaran->tanggal_mendaftar)->format('d F Y') }}</p>
            <p><span>Beasiswa:</span> {{ $pendaftaran->beasiswa }}</p>
            <p><span>Status:</span> {{ $pendaftaran->status }}</p>
            <p><span>Dibuat Pada:</span> {{ \Carbon\Carbon::parse($pendaftaran->created_at)->format('d F Y') }}</p>
            <p><span>Diperbaharui Pada:</span> {{ \Carbon\Carbon::parse($pendaftaran->updated_at)->format('d F Y') }}</p>
        </div>

        <div class="actions">
            <a href="{{ route('pendaftaran.edit', $pendaftaran->id) }}" class="btn">Edit</a>
            <button onclick="confirmDelete()" class="btn danger">Hapus</button>
        </div>
    </div>

    <script>
        function confirmDelete() {
            if (confirm('Apakah Anda yakin ingin menghapus pendaftaran ini?')) {
                window.location.href = "{{ route('pendaftaran.delete', $pendaftaran->id) }}";
            }
        }
    </script>
</body>
</html>

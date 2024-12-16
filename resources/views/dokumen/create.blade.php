<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Dokumen Pendukung</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #0077b3;
        }
        form {
            margin-top: 20px;
        }
        label {
            font-size: 16px;
            font-weight: bold;
            display: block;
            margin-bottom: 8px;
        }
        input, select, button {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }
        button {
            background-color: #0077b3;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #005f87;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Tambah Dokumen Pendukung</h1>
        <form action="{{ route('dokumen.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Pilih Pendaftaran -->
            <label for="pendaftaran_id">ID Pendaftaran</label>
            <select name="pendaftaran_id" id="pendaftaran_id" required>
                <option value="">-- Pilih ID Pendaftaran --</option>
                @foreach($pendaftarans as $pendaftaran)
                    <option value="{{ $pendaftaran->id }}">ID: {{ $pendaftaran->id }} - {{ $pendaftaran->user->name ?? '' }}</option>
                @endforeach
            </select>

            <!-- Nama Dokumen -->
            <label for="nama_dokumen">Nama Dokumen</label>
            <input type="text" name="nama_dokumen" id="nama_dokumen" placeholder="Masukkan Nama Dokumen" required>

            <!-- Unggah Dokumen -->
            <label for="file_path">Unggah Dokumen</label>
            <input type="file" name="file_path" id="file_path" required>

            <!-- Status Verifikasi -->
            

            <!-- Tombol Simpan -->
            <button type="submit">Simpan Dokumen</button>
        </form>
    </div>
</body>
</html>

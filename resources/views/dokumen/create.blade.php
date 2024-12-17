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
            background-color:rgb(231, 124, 124);
            color: #333;
        }

        .container {
            max-width: 900px;
            margin: 40px auto;
            padding: 20px;
            background-color:rgb(245, 118, 118);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h1 {
            font-size: 32px;
            color: #0077b3;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            font-size: 18px;
            color: #555;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            border-color: #0077b3;
            outline: none;
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
        <h1>Tambah Dokumen Pendukung</h1>

        <!-- Form untuk tambah dokumen -->
        <form action="{{ route('dokumen.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Input Pendaftaran ID -->
            <div class="form-group">
                <label for="pendaftaran_id">ID Pendaftaran</label>
                <input type="number" id="pendaftaran_id" name="pendaftaran_id" placeholder="Masukkan ID Pendaftaran" required>
            </div>

            <!-- Input Nama Dokumen -->
            <div class="form-group">
                <label for="nama_dokumen">Nama Dokumen</label>
                <input type="text" id="nama_dokumen" name="nama_dokumen" placeholder="Masukkan Nama Dokumen" required>
            </div>

            <!-- Input File Dokumen -->
            <div class="form-group">
                <label for="file">File Dokumen</label>
                <input type="file" id="file" name="file" accept=".pdf,.jpeg,.png,.jpg" required>
            </div>

            <!-- Submit Button -->
            <div class="actions">
                <button type="submit" class="btn">Tambah Dokumen</button>
                <a href="{{ route('dokumen.index') }}" class="btn danger">Batal</a>
            </div>
        </form>
    </div>
</body>
</html>
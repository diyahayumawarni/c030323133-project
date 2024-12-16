<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Dokumen Pendukung</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: white;
            width: 100%;
            max-width: 500px;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        h1 {
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            font-size: 16px;
            margin-bottom: 5px;
            display: block;
        }

        input[type="file"], input[type="text"], input[type="date"] {
            width: 100%;
            padding: 12px 15px;
            margin-top: 5px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .submit-button {
            width: 100%;
            padding: 14px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .submit-button:hover {
            background-color: #45a049;
        }

        .alert {
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            margin-bottom: 15px;
            text-align: center;
            border-radius: 5px;
        }

        .error-message {
            color: red;
            font-size: 14px;
            margin-top: 5px;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Upload Dokumen Pendukung</h1>

        <!-- Menampilkan pesan sukses jika ada -->
        @if(session('success'))
            <div class="alert">{{ session('success') }}</div>
        @endif

        <!-- Form Upload Dokumen Pendukung -->
        <form action="{{ route('dokumen.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="pendaftaran_id">ID Pendaftaran</label>
                <input type="text" name="pendaftaran_id" id="pendaftaran_id" placeholder="Masukkan ID Pendaftaran" value="{{ old('pendaftaran_id') }}" required>
                @error('pendaftaran_id')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="nama_dokumen">Nama Dokumen</label>
                <input type="text" name="nama_dokumen" id="nama_dokumen" placeholder="Masukkan nama dokumen" value="{{ old('nama_dokumen') }}" required>
                @error('nama_dokumen')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="file_path">Upload File</label>
                <input type="file" name="file" id="file_path" accept=".pdf,.doc,.docx,.jpg,.png" required>
                @error('file')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="submit-button">Upload Dokumen</button>
        </form>
    </div>

</body>
</html>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran</title>
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
            max-width: 600px;
            margin: 40px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h1 {
            font-size: 32px;
            color: #0077b3;
            margin-bottom: 20px;
        }

        form {
            display: grid;
            grid-gap: 20px;
        }

        label {
            font-size: 18px;
            color: #555;
        }

        input, select {
            padding: 10px;
            font-size: 16px;
            width: 100%;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .submit-button {
            background-color: #0077b3;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        .submit-button:hover {
            background-color: #005f87;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Form Pendaftaran Beasiswa</h1>
        
        <!-- Form Pendaftaran -->
        <form action="{{ route('pendaftaran.store') }}" method="POST">
            @csrf
            <label for="nama">Nama Lengkap</label>
            <input type="text" name="nama" id="nama" placeholder="Masukkan nama lengkap" required>

            <label for="beasiswa">Jenis Beasiswa</label>
            <select name="beasiswa" id="beasiswa" required>
                <option value="Beasiswa Unggulan">Beasiswa Unggulan</option>
                <option value="Beasiswa Prestasi">Beasiswa Prestasi</option>
                <!-- Tambahkan pilihan beasiswa lainnya -->
            </select>

            <!-- Tambahkan field lain sesuai kebutuhan -->
            
            <button type="submit" class="submit-button">Daftar Sekarang</button>
        </form>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    <title>Tambah Pendaftaran Beasiswa</title>
=======
    <title>Form Pendaftaran</title>
>>>>>>> 9b0d276b26f421549bf256c4120b2321b7411eec
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
<<<<<<< HEAD
            max-width: 900px;
            margin: 40px auto;
            padding: 20px;
            background-color: #ffffff;
=======
            max-width: 600px;
            margin: 40px auto;
            padding: 20px;
            background-color: #fff;
>>>>>>> 9b0d276b26f421549bf256c4120b2321b7411eec
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h1 {
            font-size: 32px;
            color: #0077b3;
            margin-bottom: 20px;
        }

<<<<<<< HEAD
        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
=======
        form {
            display: grid;
            grid-gap: 20px;
        }

        label {
>>>>>>> 9b0d276b26f421549bf256c4120b2321b7411eec
            font-size: 18px;
            color: #555;
        }

<<<<<<< HEAD
        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 10px;
            font-size: 16px;
=======
        input, select {
            padding: 10px;
            font-size: 16px;
            width: 100%;
>>>>>>> 9b0d276b26f421549bf256c4120b2321b7411eec
            border: 1px solid #ddd;
            border-radius: 5px;
        }

<<<<<<< HEAD
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
=======
        .submit-button {
>>>>>>> 9b0d276b26f421549bf256c4120b2321b7411eec
            background-color: #0077b3;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
<<<<<<< HEAD
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
=======
            font-size: 16px;
            cursor: pointer;
        }

        .submit-button:hover {
            background-color: #005f87;
        }
>>>>>>> 9b0d276b26f421549bf256c4120b2321b7411eec
    </style>
</head>
<body>
    <div class="container">
<<<<<<< HEAD
        <h1>Tambah Pendaftaran Beasiswa</h1>

        <!-- Form untuk tambah pendaftaran -->
        <form action="{{ route('pendaftaran.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama_user">Nama Lengkap</label>
                <input type="text" id="nama_user" name="nama_user" placeholder="Masukkan nama lengkap" required>
            </div>

            <div class="form-group">
                <label for="beasiswa">Beasiswa</label>
                <select id="beasiswa" name="beasiswa" required>
                    <option value="">Pilih Beasiswa</option>
                    <option value="Beasiswa Unggulan Poliban">Beasiswa Unggulan Poliban</option>
                    <option value="Beasiswa Prestasi">Beasiswa Prestasi</option>
                    <option value="Beasiswa S1">Beasiswa S1</option>
                </select>
            </div>

            <div class="form-group">
                <label for="tanggal_mendaftar">Tanggal Mendaftar</label>
                <input type="date" id="tanggal_mendaftar" name="tanggal_mendaftar" required>
            </div>

            <div class="form-group">
                <label for="status">Status Pendaftaran</label>
                <select id="status" name="status" required>
                    <option value="Dalam Proses">Dalam Proses</option>
                    <option value="Diterima">Diterima</option>
                    <option value="Ditolak">Ditolak</option>
                </select>
            </div>

            <div class="actions">
                <button type="submit" class="btn">Tambah Pendaftar</button>
                <a href="{{ route('pendaftaran.index') }}" class="btn danger">Batal</a>
            </div>
=======
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
>>>>>>> 9b0d276b26f421549bf256c4120b2321b7411eec
        </form>
    </div>
</body>
</html>

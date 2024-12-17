<!DOCTYPE html> 
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pendaftaran Beasiswa</title>
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
                    <option value="MSIB">MSIB</option>
                    <option value="Merdeka Belajar">Merdeka Belajar</option>
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

            <!-- Status Verifikasi -->
            <div class="form-group">
                <label for="status_verifikasi">Status Verifikasi</label>
                <select id="status_verifikasi" name="status_verifikasi" required>
                    <option value="pending">Pending</option>
                    <option value="verifikasi">Verifikasi</option>
                    <option value="ditolak">Ditolak</option>
                </select>
            </div>

            <div class="actions">
                <button type="submit" class="btn">Tambah Pendaftar</button>
                <a href="{{ route('pendaftaran.index') }}" class="btn danger">Batal</a>
            </div>
        </form>
    </div>
</body>
</html>

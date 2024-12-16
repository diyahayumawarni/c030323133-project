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
        <a href="/tambah-pendaftaran" class="add-button">Tambah Pendaftaran</a> <!-- Ganti URL sesuai kebutuhan aplikasi Anda -->

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
                </tr>
            </thead>
            <tbody>
                <!-- Contoh Data -->
                <tr>
                    <td>1</td>
                    <td>Diyah Ayu</td>
                    <td>2024-12-15</td>
                    <td>Beasiswa Unggulan</td>
                    <td>Diproses</td>
                    <td>2024-12-16</td>
                    <td>2024-12-14</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Noor Alfa</td>
                    <td>2024-12-14</td>
                    <td>Beasiswa Prestasi</td>
                    <td>Diterima</td>
                    <td>2024-12-15</td>
                    <td>2024-12-13</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>

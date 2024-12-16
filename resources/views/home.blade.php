<!-- resources/views/home.blade.php -->

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f7fc;
        }

        .navbar {
            background-color: #333;
            color: white;
            padding: 15px;
            text-align: center;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            padding: 10px;
            margin: 0 15px;
        }

        .navbar a:hover {
            background-color: #575757;
            border-radius: 5px;
        }

        .container {
            text-align: center;
            margin-top: 50px;
        }

        .welcome-message {
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
        }

        .user-info {
            font-size: 18px;
            color: #555;
        }

        .logout-button {
            background-color: #ff4c4c;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .logout-button:hover {
            background-color: #e60000;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <div class="navbar">
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('beasiswa.index') }}">Beasiswa</a>
        <a href="{{ route('pendaftaran.index') }}">Pendaftaran</a>
        <a href="{{ route('dokumen.index') }}">Dokumen</a>
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
    </div>

    <!-- Main Content -->
    <div class="container">
        <div class="welcome-message">
            Selamat datang, {{ Auth::user()->name }}!
        </div>

        <div class="user-info">
            <p>Email: {{ Auth::user()->email }}</p>
            <p>Anda telah berhasil login.</p>
        </div>

        <!-- Logout Button -->
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        <button class="logout-button" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</button>
    </div>

</body>
</html>

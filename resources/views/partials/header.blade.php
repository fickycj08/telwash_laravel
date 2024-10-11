<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>

<body>
    <div class="head">
        <div class="logo-top">
            <!-- Anda bisa menambahkan logo di sini jika ada -->
        </div>
        @if (Auth::check())
            <!-- Tampilkan tombol Log Out jika user sudah login -->
            <a href="{{ route('logout') }}" class="login-button" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <div class="login-top">
                    <p>Log Out</p>
                </div>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        @endif
    </div>
</body>

</html>

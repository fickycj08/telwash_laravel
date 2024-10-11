<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Sertakan header -->
    @include('partials.header')

    <!-- Overlay yang akan muncul saat tombol login diklik -->
    <div class="overlay" id="overlay">
        <div class="modal">
            <button class="close-btn" id="close-btn">&times;</button>

            <!-- Form Login -->
            <div id="login-form" class="form-content">
                <h2 class="account-login">Account Log In</h2>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <label for="username">Email</label><br>
                        <input type="text" id="username" name="username" class="input-field"
                            placeholder="Masukkan Email Anda" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label><br>
                        <input type="password" id="password" name="password" class="input-field"
                            placeholder="Masukkan Password Anda" required>
                    </div>
                    <button type="submit" name="login" class="login2-button">Login</button>
                </form>
                <p class="toggle-form">Belum punya akun? <a href="#" id="show-register">Registrasi</a></p>
            </div>

            <!-- Form Registrasi -->
            <div id="register-form" class="form-content" style="display: none;">
                <h2 class="account-login">Account Registration</h2>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group">
                        <label for="fullname">Nama Lengkap</label><br>
                        <input type="text" id="fullname" name="fullname" class="input-field"
                            placeholder="Masukkan Nama Lengkap Anda" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label><br>
                        <input type="email" id="email" name="email" class="input-field"
                            placeholder="Masukkan Email Anda" required>
                    </div>
                    <div class="form-group">
                        <label for="register-password">Password</label><br>
                        <input type="password" id="register-password" name="register-password" class="input-field"
                            placeholder="Masukkan Password Anda" required>
                    </div>
                    <button type="submit" name="register" class="login2-button">Registrasi</button>
                </form>
                <p class="toggle-form">Sudah punya akun? <a href="#" id="show-login">Login</a></p>
            </div>

            <img class="logo3" src="{{ asset('build/assets/logo.png') }}" alt="">
        </div>
    </div>

    <!-- Konten Utama -->
    <div class="landing-bg">
        <h1 class="slogan">I'm Ready To Go To Your <span class="highlight">Wardrobe!</span></h1>
        <a href="#" class="login-button" id="login-btn">
            <div class="login-center">
                <p>Log In</p>
            </div>
        </a>
        <div class="container-landing">
            <i class="ph-handbag"></i>
            <span class="container-text">Pakaian Diterima</span>
        </div>
        <i class="ph-arrow-fat-line-right"></i>
        <div class="container2-landing">
            <i class="ph-hourglass-high"></i>
            <span class="container-text">Pakaian Diproses</span>
        </div>
        <i class="ph-arrow-fat-line-right"></i>
        <div class="container3-landing">
            <i class="ph-t-shirt"></i>
            <span class="container-text">Pakaian Selesai</span>
        </div>
        <img class="logo2" src="{{ asset('asset/assets/logo.png') }}" alt="">
    </div>

    <!-- Tambahkan Script untuk Mengontrol Overlay dan Perpindahan Antar Form -->
    <script src="https://unpkg.com/phosphor-icons"></script>
    <script>
        // JavaScript untuk mengontrol modal login/register
        const loginBtn = document.getElementById('login-btn');
        const overlay = document.getElementById('overlay');
        const closeBtn = document.getElementById('close-btn');
        const loginForm = document.getElementById('login-form');
        const registerForm = document.getElementById('register-form');
        const showRegisterBtn = document.getElementById('show-register');
        const showLoginBtn = document.getElementById('show-login');

        loginBtn.addEventListener('click', (e) => {
            e.preventDefault();
            overlay.style.display = 'flex';
            loginForm.style.display = 'block';
            registerForm.style.display = 'none';
        });

        closeBtn.addEventListener('click', () => {
            overlay.style.display = 'none';
        });

        overlay.addEventListener('click', (e) => {
            if (e.target === overlay) {
                overlay.style.display = 'none';
            }
        });

        showRegisterBtn.addEventListener('click', (e) => {
            e.preventDefault();
            loginForm.style.display = 'none';
            registerForm.style.display = 'block';
        });

        showLoginBtn.addEventListener('click', (e) => {
            e.preventDefault();
            registerForm.style.display = 'none';
            loginForm.style.display = 'block';
        });
    </script>
</body>

</html>

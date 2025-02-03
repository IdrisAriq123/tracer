<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Welcome</title>
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300; 1,400;1,500;1,600;1,700;1, 800;1,900&display=swap');
    </style>
</head>

<body>
    <nav>
        <div class="profile">
            <div class="logo">
                <a href="#">TracerStudy</a>
            </div>
        </div>
        <div class="menu">
            <div class="menu-item">
                <button onclick="window.location='{{ route('login') }}';">Data Alumni</button>
            </div>
            <div class="menu-item">
                <button onclick="window.location='{{ route('login') }}';">Tracer Kuliah</button>
            </div>
            <div class="menu-item">
                <button onclick="window.location='{{ route('login') }}';">Tracer Kerja</button>
            </div>
            <div class="login">
                <button onclick="window.location='{{ route('login') }}';">Masuk</button>
            </div>
        </div>
    </nav>
    <div class="top-content">
        <h1>Selamat Datang di Tracer Study</h1>
        <p>Temukan data alumni, tracer kuliah, dan tracer kerja di sini.</p>
    </div>
    <script src="{{ asset('js/welcome.js') }}"></script>
    <footer class="footer">
        <div class="footer-content">
            <p>&copy;2025 TracerStudy by IdrisAriq. | All rights reserved.</p>
            <div class="social-icons">
                <a href="https://www.google.com/maps/place/SMK+Antartika+1+Sidoarjo/" class="social-icon">
                    <img src="{{ asset('icons/location-removebg-preview.png') }}" alt="Logo">
                </a>
                <a href="#" class="social-icon-1">
                    <img src="{{ asset('icons/instagram_logo_icon_181283.webp') }}" alt="Logo">
                </a>
                <a href="#" class="social-icon">
                    <img src="{{ asset('icons/facebook-new.png') }}" alt="Logo">
                </a>
                <a href="https://youtube.com/@smkantartika1sidoarjo726" class="social-icon">
                    <img src="{{ asset('icons/youtube_logo_icon_206627.png') }}" alt="Logo">
                </a>
            </div>
        </div>
    </footer>
</body>

</html>

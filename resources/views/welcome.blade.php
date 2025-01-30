<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman welcome</title>
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
</head>

<body>

    <nav>
        <div class="profile">
            <div class="logo">
                <img src="{{ asset('images/logo.png') }}" alt="Logo">
            </div>
            <div class="login">
                <button onclick="window.location='{{ route('login') }}';">Login</button>
            </div>
        </div>
        <div class="menu">
            <div class="menu-item">
            </div>
            <div class="menu-item">
                <button onclick="window.location='{{ route('login') }}';">Data Alumni</button>
            </div>
            <div class="menu-item">
                <button onclick="window.location='{{ route('login') }}';">Tracer Kuliah</button>
            </div>
            <div class="menu-item">
                <button onclick="window.location='{{ route('login') }}';">Tracer Kerja</button>
            </div>
        </div>
        <div class="menu_dropdown">
            <button class="burger-icon" id="burgerMenu">
                <img src="{{ asset('icons/dropdown.png') }}" alt="Icons">
            </button>
            <ul class="dropdown" id="dropdownMenu">
                <button onclick="window.location='{{ route('login') }}';" class="dropdown-icon">
                    <img src="{{ asset('icons/dropdown.png') }}" alt="Icons">
                </button>
                <button onclick="window.location='{{ route('login') }}';" class="dropdown-icon">
                    <img src="{{ asset('icons/dropdown.png') }}" alt="Icons">
                </button>
            </ul>
        </div>
    </nav>
    <div class="top-content">
        <div class="info-profil">
            <div class="tabel-profil">
                <div class="profil">
                    <img src="{{ asset('images/profil.png' )}}" alt="profil">
                </div>
                <div class="profil-item">
                    <p>Nama :</p>
                </div>
                <div class="profil-item">
                    <p>Email :</p>
                </div>
                <div class="profil-item">
                    <p>Jurusan :</p>
                </div>
                <div class="profil-item">
                    <p>Tahun lulus :</p>
                </div>
            </div>
        </div>
    </div>
    <div class="news-events">
        <h3>Berita dan Event Alumni</h3>
        <div class="news-item">
            <h4>Reuni Akbar 2025</h4>
            <p>SMK Antartika 1 Sidoarjo mengundang semua alumni untuk menghadiri Reuni Akbar yang akan diadakan pada 10 Agustus 2025. Jangan lewatkan kesempatan ini untuk bertemu kembali dengan teman-teman lama!</p>
        </div>
        <div class="news-item">
            <h4>Workshop Karir</h4>
            <p>Workshop Karir akan diselenggarakan pada 15 September 2025, membahas tips dan trik mendapatkan pekerjaan serta pengalaman alumni yang telah sukses di berbagai bidang.</p>
        </div>
        <div class="news-item">
            <h4>Pelatihan Wirausaha</h4>
            <p>Pelatihan wirausaha akan diadakan untuk membekali alumni yang ingin membangun bisnis sendiri. Jadwal dan lokasi akan segera diumumkan.</p>
        </div>
    </div>
    <script src="{{ asset('js/welcome.js') }}"></script>
    <footer class="footer">
        <div class="footer-content">
            <p>©2025 TracerStudy by IdrisAriq. | All rights reserved.</p>
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

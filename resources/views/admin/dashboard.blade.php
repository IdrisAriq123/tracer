<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nav_admin.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>

    <nav>
        <div class="profile">
            <div class="logo">
                <a href="#">TracerStudy</a>
            </div>
            <div class="Username">
                {{ Auth::user()->name }}
            </div>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-danger">Logout</button>
            </form>
        </div>
        <div class="menu">
            <div class="menu-item">
                <button onclick="window.location='{{ route('admin.dashboard') }}';">Home</button>
            </div>
            <div class="menu-item">
                <button onclick="window.location='{{ route('admin.alumni.index') }}';">Data Alumni</button>
            </div>
            <div class="menu-item">
                <button onclick="window.location='{{ route('admin.TracerKuliah.index') }}';">Tracer Kuliah</button>
            </div>
            <div class="menu-item">
                <button onclick="window.location='{{ route('admin.TracerKerja.index') }}';">Tracer Kerja</button>
            </div>
        </div>
    </nav>
    <div class="top-content">
        <div class="info-profil">
            <h3>Kelola Data</h3>
            <div class="admin-actions">
                <button onclick="window.location='{{ route('sekolah.index') }}';">Kelola Sekolah</button>
                <button onclick="window.location='{{ route('program.index') }}';">Kelola Program Keahlian</button>
                <button onclick="window.location='{{ route('konsentrasi.index') }}';">Kelola Konsentrasi Keahlian</button>
                <button onclick="window.location='{{ route('bidang.index') }}';">Kelola Bidang Keahlian</button>
                <button onclick="window.location='{{ route('status-alumni.index') }}';">Kelola Status Alumni</button>
                <button onclick="window.location='{{ route('tahun-lulus.index') }}';">Kelola Tahun Lulus</button>
                <button onclick="window.location='{{ route('testimoni.index') }}';">Testimoni</button>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/admin.js') }}"></script>
    <footer class="footer">
        <div class="footer-content">
            <p>©2025 TracerStudy by IdrisAriq. | All rights reserved.</p>
            <div class="social-icons">
                <a href="https://www.google.com/maps/place/SMK+Antartika+1+Sidoarjo/@-7.4333061,112.7284261,17z/data=!4m14!1m7!3m6!1s0x2dd7e6a663d94b21:0x3a57baa5fb4760ce!2sSMK+Antartika+1+Sidoarjo!8m2!3d-7.4333114!4d112.731001!16s%2Fg%2F1tdjtffq!3m5!1s0x2dd7e6a663d94b21:0x3a57baa5fb4760ce!8m2!3d-7.4333114!4d112.731001!16s%2Fg%2F1tdjtffq?entry=ttu&g_ep=EgoyMDI1MDExNS4wIKXMDSoASAFQAw%3D%3D" class="social-icon">
                    <img src="{{ asset('icons/location-removebg-preview.png') }}" alt="Logo">
                </a>
                <a href="#" class="social-icon-1">
                    <img src="{{ asset('icons/instagram_logo_icon_181283.webp') }}" alt="Logo">
                </a>
                <a href="#" class="social-icon">
                    <img src="{{ asset('icons/facebook-new.png') }}" alt="Logo">
                </a>
                <a href="https://youtube.com/@smkantartika1sidoarjo726?si=Hkk_Db7MrApDsAUr" class="social-icon">
                    <img src="{{ asset('icons/youtube_logo_icon_206627.png') }}" alt="Logo">
                </a>
            </div>
        </div>
    </footer>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Alumni</title>
    <link rel="stylesheet" href="{{ asset('css/alumni.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nav_alumni.css') }}">
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
                <button onclick="window.location='{{ route('alumni.dashboard') }}';">Home</button>
            </div>
            <div class="menu-item">
                <button onclick="window.location='{{ route('alumni.Dataalumni.index') }}';">Data Alumni</button>
            </div>
            <div class="menu-item">
                <button onclick="window.location='{{ route('tracerstudy.create') }}';">Tracer Study</button>
            </div>
            <div class="menu-item">
                <button onclick="window.location='{{ route('alumni.tracerkuliah.create') }}';">Tracer Kuliah</button>
            </div>
            <div class="menu-item">
                <button onclick="window.location='{{ route('alumni.tracerkerja.create') }}';">Tracer Kerja</button>
            </div>
            <div class="menu-item">
                <button onclick="window.location='{{ route('testimoni.create') }}';">Testimoni</button>
            </div>
        </div>
        <div class="menu_dropdown">
            <button class="burger-icon" id="burgerMenu">
                <img src="{{ asset('icons/dropdown.png') }}" alt="Icons">
            </button>
            <ul class="dropdown" id="dropdownMenu">
                <form id="logout-form" action="{{ route('alumni.profile.index') }}" method="GET" style="display: inline;">
                    @csrf
                    <button type="submit" class="dropdown-icon">
                        <img src="{{ asset('icons/profile.png') }}" alt="Logout Icon">
                    </button>
                </form>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: inline;">
                    @csrf
                    <button type="submit" class="dropdown-icon">
                        <img src="{{ asset('icons/logout.png') }}" alt="Logout Icon">
                    </button>
                </form>

            </ul>
        </div>
    </nav>
    <div class="top-content">
        <!-- Profile Information -->
        <div class="profile-info">
            <img src="{{ asset('images/profil.png') }}" alt="Profile Picture" class="profile-img">
            <div class="profile-details">
                <p><strong>Nama:</strong> {{ $alumnis->nama_depan ?? 'Data alumni tidak ditemukan.' }} {{ $alumnis->nama_belakang ?? '' }}</p>
                <p><strong>Email:</strong> {{ Auth::user()->email }}</p>
                <p><strong>Jurusan:</strong> {{ $alumnis->konsentrasiKeahlian->konsentrasi_keahlian ?? 'Jurusan tidak ditemukan.' }}</p>
                <p><strong>Tahun Lulus:</strong> {{ $alumnis->tahunLulus->tahun_lulus ?? 'Tahun Lulus tidak ditemukan.' }}</p>
            </div>
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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman welcome</title>
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
                {{-- <button onclick="window.location='{{ route('admin.dashboard') }}';">Home</button> --}}
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
    <div class="chart-info">
    <h3>Diagram Data Alumni</h3>
</div>
<div class="chart-section">
    <div class="chart-container">
        <canvas id="tracerChart"></canvas>
    </div>
    <div class="chart-legend">
        <ul id="legendList"></ul>
        <p>Jumlah Alumni: 600</p>
    </div>
</div>
<div class="chart-info">
    <h3>Diagram Data Pekerjaan Alumni</h3>
</div>
<div class="chart-section">
    <div class="chart-container">
        <canvas id="tracerChart-kerja"></canvas>
    </div>
    <div class="chart-legend">
        <ul id="legendList-kerja"></ul>
        <p>Jumlah Alumni: 600</p>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Diagram Data Alumni
    const ctx1 = document.getElementById('tracerChart').getContext('2d');
    const tracerChart = new Chart(ctx1, {
        type: 'bar', // Ubah jenis diagram menjadi 'bar'
        data: {
            labels: ['Jurusan A', 'Jurusan B', 'Jurusan C', 'Jurusan D'], // Label sumbu x
            datasets: [{
                label: 'Jumlah Alumni',
                data: [150, 200, 100, 150], // Data diagram batang
                backgroundColor: [
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(255, 99, 132, 0.2)'
                ],
                borderColor: [
                    'rgba(75, 192, 192, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(255, 99, 132, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    // Diagram Data Pekerjaan Alumni
    const ctx2 = document.getElementById('tracerChart-kerja').getContext('2d');
    const tracerChartKerja = new Chart(ctx2, {
        type: 'bar', // Ubah jenis diagram menjadi 'bar'
        data: {
            labels: ['Bekerja', 'Belum Bekerja', 'Wirausaha'], // Label sumbu x
            datasets: [{
                label: 'Jumlah Alumni',
                data: [400, 150, 50], // Data diagram batang
                backgroundColor: [
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(75, 192, 192, 0.2)'
                ],
                borderColor: [
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)',
                    'rgba(75, 192, 192, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>

    <script src="{{ asset('js/welcome.js') }}"></script>
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
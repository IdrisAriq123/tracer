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
                <img src="{{ asset('images/logo.png') }}" alt="Logo">
            </div>
            <div class="Username">
                {{ Auth::user()->name }}
            </div>
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
        <div class="menu_dropdown">
            <button class="burger-icon" id="burgerMenu">
                <img src="{{ asset('icons/dropdown.png') }}" alt="Icons">
            </button>
            <ul class="dropdown" id="dropdownMenu">
                <button onclick="window.location='{{ route('login') }}';" class="dropdown-icon">
                    <img src="{{ asset('icons/dropdown.png') }}" alt="Icons">
                </button>
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
    <script src="{{ asset('js/admin.js') }}"></script>
    <footer class="footer">
        <div class="footer-content">
            <p>Copyright © 2024-2027 Andika. Hak Cipta. All rights reserved.</p>
            <div class="social-icons">
                <a href="#" class="social-icon-1">
                    <img src="{{ asset('images/tk.png') }}" alt="Logo">
                </a>
                <a href="#" class="social-icon">
                    <img src="{{ asset('images/ig.jfif') }}" alt="Logo">
                </a>
            </div>
        </div>
    </footer>
</body>

</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengaturan Privasi Alumni</title>
    <link rel="stylesheet" href="{{ asset('css/tahun.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nav_admin.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {

            height: 800px;
            display: flex;
            flex-direction: column;
            margin: 0;
        }

        /* Styling untuk h2 */
        h2 {
            font-size: 24px; /* Ukuran font */
            font-weight: bold; /* Ketebalan font */
            text-align: center; /* Mengatur agar teks berada di tengah */
            color: #333; /* Warna teks */
            margin: 20px 0; /* Jarak atas dan bawah */
            padding: 10px; /* Padding di sekitar teks */
            background-color: #f4f4f4; /* Warna latar belakang */
            border-radius: 8px; /* Sudut tumpul */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Bayangan halus */
        }

        /* Responsif untuk ukuran layar lebih kecil */
        @media (max-width: 768px) {
            h2 {
                font-size: 20px; /* Ukuran font lebih kecil di layar kecil */
                margin: 15px 0; /* Menyesuaikan jarak */
                padding: 8px; /* Menyesuaikan padding */
            }
        }

    </style>
</head>
<body>

    <nav>
        <div class="profile">
            <div class="logo">
                <a href="http://127.0.0.1:8000/admin/dashboard">TracerStudy</a>
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
                <button onclick="window.location='{{ route('admin.TracerKerja.index') }}';">Tracer Kerja</button>            </div>
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

    <div class="container">
        <h2>Data Testimoni</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Alumni</th>
                    <th>Testimoni</th>
                    <th>Tanggal Testimoni</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($testimonis as $testimoni)
                <tr>
                    <td>{{ $testimoni->id_testimoni }}</td>
                    <td>{{ $testimoni->alumni->nama_depan }} {{ $testimoni->alumni->nama_belakang }}</td>
                    <td>{{ $testimoni->testimoni }}</td>
                    <td>{{ $testimoni->tgl_testimoni }}</td>
                    <td>
                        <form action="{{ route('testimoni.destroy', $testimoni->id_testimoni) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
    <script src="{{ asset('js/admin.js') }}"></script>
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
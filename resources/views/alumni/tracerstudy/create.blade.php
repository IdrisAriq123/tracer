<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Alumni</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">


    <style>
        /* Reset default margin and padding */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Define root variables */
:root {
    --text-color: #000000;
    --bg-input-color: #4782B2;
    --bg-input-2-color: #70BFFF;
    --bg-1-color: #1A2189;
    --bg-2-color: #FFFFFF;
}

/* Style body */
body {
    font-family: 'Roboto', sans-serif;
    background-color: #e6f7ff;
    color: #333;
    padding: 20px;
    display: flex;
    flex-direction: column;
    align-items: center;
    min-height: 100vh;
}

/* Style container */
.container {
    max-width: 800px;
    width: 100%;
    margin: 20px auto;
    padding: 30px;
    background-color: #fff;
    border-radius: 12px;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease-in-out;
}

/* Hover effect for container */
.container:hover {
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
    transform: scale(1.02);
}

/* Style heading */
h1 {
    text-align: center;
    font-size: 2.5em;
    font-weight: bold;
    color: var(--bg-1-color);
    margin-bottom: 20px;
    text-transform: uppercase;
    text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
}

/* Style form */
form {
    width: 100%;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

/* Form group */
label {
    display: block;
    font-size: 1.1em;
    font-weight: bold;
    color: #555;
    margin-bottom: 8px;
}

input,
select,
textarea {
    width: 100%;
    padding: 12px;
    border: 2px solid #ddd;
    border-radius: 6px;
    font-size: 1.1em;
    transition: border-color 0.3s;
}

input:focus,
select:focus,
textarea:focus {
    border-color: var(--bg-input-color);
    outline: none;
    box-shadow: 0 0 5px rgba(71, 130, 178, 0.5);
}

/* Adjust textarea height */
textarea {
    height: 100px;
    resize: vertical;
}

/* Style button */
button {
    width: 100%;
    padding: 15px;
    background-color: var(--bg-input-color);
    color: var(--bg-2-color);
    font-size: 1.3em;
    font-weight: bold;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    transition: background-color 0.3s;
    margin-top: 15px;
}

button:hover {
    background-color: #45a049;
}

/* Responsive design */
@media (max-width: 768px) {
    .container {
        padding: 20px;
    }

    h1 {
        font-size: 2em;
    }

    input,
    select,
    textarea {
        padding: 10px;
    }

    button {
        font-size: 1.1em;
    }
}

    </style>
</head>

<body>
    <h1>Tambah Data Alumni</h1>

    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <form action="{{ route('alumni.store') }}" method="POST">
        @csrf

        <label for="id_tahun_lulus">Tahun Lulus:</label>
        <select name="id_tahun_lulus" required>
            <option value="">Pilih Tahun Lulus</option>
            @foreach ($tahunLulus as $tahun)
                <option value="{{ $tahun->id_tahun_lulus }}">{{ $tahun->tahun_lulus }}</option>
            @endforeach
        </select>

        <label for="id_konsentrasi_keahlian">Konsentrasi Keahlian:</label>
        <select name="id_konsentrasi_keahlian" required>
            <option value="">Pilih Konsentrasi Keahlian</option>
            @foreach ($konsentrasiKeahlian as $konsentrasi)
                <option value="{{ $konsentrasi->id_konsentrasi_keahlian }}">{{ $konsentrasi->konsentrasi_keahlian }}
                </option>
            @endforeach
        </select>

        <label for="id_status_alumni">Status Alumni:</label>
        <select name="id_status_alumni" required>
            <option value="">Pilih Status Alumni</option>
            @foreach ($statusAlumni as $status)
                <option value="{{ $status->id_status_alumni }}">{{ $status->status }}</option>
            @endforeach
        </select>

        <label for="nisn">NISN:</label>
        <input type="text" name="nisn" required maxlength="20">

        <label for="nik">NIK:</label>
        <input type="text" name="nik" required maxlength="20">

        <label for="nama_depan">Nama Depan:</label>
        <input type="text" name="nama_depan" required maxlength="50">

        <label for="nama_belakang">Nama Belakang:</label>
        <input type="text" name="nama_belakang" maxlength="50">

        <label for="jenis_kelamin">Jenis Kelamin:</label>
        <select name="jenis_kelamin" required>
            <option value="">Pilih Jenis Kelamin</option>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>

        <label for="tempat_lahir">Tempat Lahir:</label>
        <input type="text" name="tempat_lahir" required maxlength="20">

        <label for="tgl_lahir">Tanggal Lahir:</label>
        <input type="date" name="tgl_lahir" required>

        <label for="alamat">Alamat:</label>
        <textarea name="alamat" maxlength="50"></textarea>

        <label for="no_hp">No. HP:</label>
        <input type="text" name="no_hp" maxlength="15">

        <label for="akun_fb">Akun Facebook:</label>
        <input type="text" name="akun_fb" maxlength="50">

        <label for="akun_ig">Akun Instagram:</label>
        <input type="text" name="akun_ig" maxlength="50">

        <label for="akun_tiktok">Akun TikTok:</label>
        <input type="text" name="akun_tiktok" maxlength="50">

        <label for="email">Email:</label>
        <input type="email" name="email" required maxlength="50">

        <label for="password">Password:</label>
        <input type="password" name="password" required minlength="8">

        {{-- <label for="jenis_kelamin">Status Login:</label>
        <select name="status_login" required>
            <option value="">Pilih Status</option>
            <option value="Laki-laki">Aktif</option>
            <option value="Perempuan">Tidak Aktif</option>
        </select> --}}

        <button type="submit">Simpan</button>
    </form>
</body>

</html>

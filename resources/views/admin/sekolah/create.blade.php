<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Sekolah</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <style>
        /* Reset default margin and padding */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Style body */
body {
    font-family: 'Roboto', sans-serif;
    background-color: #e6f7ff;
    color: #333;
    padding: 20px;
}

/* Style heading */
h1 {
    text-align: center;
    font-size: 3em;
    font-weight: bold;
    margin-bottom: 30px;
    color: #1d72b8;
    text-transform: uppercase;
}

/* Style form */
.form {
    max-width: 550px;
    margin: 0 auto;
    background-color: #fff;
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease-in-out;
}

/* Hover effect for form */
.form:hover {
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
    transform: scale(1.02);
}

/* Style form elements */
label {
    display: block;
    margin-bottom: 8px;
    font-size: 1.1em;
    font-weight: 500;
    color: #555;
}

input {
    width: 100%;
    padding: 12px;
    margin-bottom: 20px;
    border: 2px solid #ddd;
    border-radius: 6px;
    font-size: 1.1em;
    transition: border-color 0.3s;
}

input:focus {
    border-color: #1d72b8;
    outline: none;
    box-shadow: 0 0 5px rgba(29, 114, 184, 0.5);
}

/* Button style */
button {
    width: 100%;
    padding: 15px;
    background-color: #1d72b8;
    color: white;
    border: none;
    border-radius: 6px;
    font-size: 1.3em;
    cursor: pointer;
    transition: background-color 0.3s;
}

button:hover {
    background-color: #155a8a;
}

/* Responsive design */
@media (max-width: 600px) {
    .form {
        padding: 20px;
    }

    h1 {
        font-size: 2.5em;
    }

    button {
        font-size: 1.1em;
    }
}

    </style>
    <h1>Tambah Sekolah</h1>

    <form action="{{ route('sekolah.store') }}" method="POST" class="form">
        @csrf
        <label for="npsn">NPSN:</label>
        <input type="text" id="npsn" name="npsn" required>

        <label for="nss">NSS:</label>
        <input type="text" id="nss" name="nss" required>

        <label for="nama_sekolah">Nama Sekolah:</label>
        <input type="text" id="nama_sekolah" name="nama_sekolah" required>

        <label for="alamat">Alamat:</label>
        <input type="text" id="alamat" name="alamat" required>

        <label for="no_telp">No. Telepon:</label>
        <input type="text" id="no_telp" name="no_telp" required>

        <label for="website">Website:</label>
        <input type="text" id="website" name="website">

        <label for="email">Email:</label>
        <input type="email" id="email" name="email">

        <button type="submit" class="btn-submit">Simpan</button>
    </form>
</body>
</html>
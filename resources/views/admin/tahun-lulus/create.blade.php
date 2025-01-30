<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Sekolah</title>
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
    min-height: 100vh;
}

/* Style container */
.container {
    max-width: 800px;
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
    font-size: 3em;
    font-weight: bold;
    color: var(--bg-1-color);
    margin-bottom: 30px;
    text-transform: uppercase;
    text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
}

/* Style form groups */
.form-group {
    margin-bottom: 20px;
}

.form-group label {
    display: block;
    margin-bottom: 8px;
    font-size: 1.1em;
    font-weight: 500;
    color: #555;
}

/* Style input fields */
.form-group input {
    width: 100%;
    padding: 12px;
    margin-bottom: 10px;
    border: 2px solid #ddd;
    border-radius: 6px;
    font-size: 1.1em;
    transition: border-color 0.3s;
}

.form-group input:focus {
    border-color: var(--bg-input-color);
    outline: none;
    box-shadow: 0 0 5px rgba(71, 130, 178, 0.5);
}

/* Button style */
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
        font-size: 2.5em;
    }

    .form-group input {
        padding: 10px;
    }

    button {
        font-size: 1.1em;
    }
}

    </style>
</head>

<body>
    <div class="container">
        <h1>Tambah Sekolah</h1>
        <div class="form">
            <form action="{{ route('tahun-lulus.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="tahun_lulus">Tahun Lulus</label>
                    <input type="text" name="tahun_lulus" class="form-control" required maxlength="4"
                        placeholder="Masukkan tahun lulus">
                </div>
                <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <input type="text" name="keterangan" class="form-control" maxlength="50"
                        placeholder="Masukkan keterangan (opsional)">
                </div>
                <button type="submit" class="btn btn-success">Simpan</button>
            </form>
        </div>
    </div>
</body>

</html>

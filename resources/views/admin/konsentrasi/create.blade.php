


    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pengaturan Privasi Alumni</title>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

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

/* Style form container */
.form {
    max-width: 600px;
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

/* Style heading */
h1 {
    text-align: center;
    font-size: 3em;
    font-weight: bold;
    margin-bottom: 30px;
    color: #1d72b8;
    text-transform: uppercase;
}

/* Style form elements */
form div {
    margin-bottom: 20px;
}

label {
    display: block;
    margin-bottom: 8px;
    font-size: 1.1em;
    font-weight: 500;
    color: #555;
}

/* Style input */
input {
    width: 100%;
    padding: 12px;
    margin-bottom: 10px;
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
    </head>
    <body>
        <div class="form">
            <h1>Tambah Konsentrasi Keahlian</h1>
        
            <form action="{{ route('konsentrasi.store') }}" method="POST">
                @csrf
        
                <div>
                    <label for="id_program_keahlian">ID Program Keahlian</label>
                    <input type="number" id="id_program_keahlian" name="id_program_keahlian" required>
                </div>
        
                <div>
                    <label for="kode_konsentrasi_keahlian">Kode Konsentrasi</label>
                    <input type="text" id="kode_konsentrasi_keahlian" name="kode_konsentrasi_keahlian" required>
                </div>
        
                <div>
                    <label for="konsentrasi_keahlian">Nama Konsentrasi</label>
                    <input type="text" id="konsentrasi_keahlian" name="konsentrasi_keahlian" required>
                </div>
        
                <button type="submit">Simpan</button>
            </form>
        </div>
        

        <script src="{{ asset('js/admin.js') }}"></script>

    </body>
    </html>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Program Keahlian</title>
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

/* Style container */
.container {
    max-width: 600px;
    margin: 0 auto;
    background-color: #fff;
    padding: 30px;
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
    margin-bottom: 30px;
    color: #1d72b8;
    text-transform: uppercase;
}

/* Style form group */
.form-group {
    margin-bottom: 20px;
}

label {
    display: block;
    margin-bottom: 8px;
    font-size: 1.1em;
    font-weight: 500;
    color: #555;
}

/* Style input and select */
input, select {
    width: 100%;
    padding: 12px;
    margin-bottom: 10px;
    border: 2px solid #ddd;
    border-radius: 6px;
    font-size: 1.1em;
    transition: border-color 0.3s;
}

input:focus, select:focus {
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
    .container {
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

    <div class="container">
        <h1>Edit Program Keahlian</h1>
        <form action="{{ route('program.update', $programKeahlian->id_program_keahlian) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="kode_program_keahlian">Kode Program</label>
                <input type="text" name="kode_program_keahlian" id="kode_program_keahlian"
                    value="{{ $programKeahlian->kode_program_keahlian }}" required>
            </div>
            <div class="form-group">
                <label for="program_keahlian">Nama Program</label>
                <input type="text" name="program_keahlian" id="program_keahlian"
                    value="{{ $programKeahlian->program_keahlian }}" required>
            </div>
            <div class="form-group">
                <label for="id_bidang_keahlian">Bidang Keahlian</label>
                <select name="id_bidang_keahlian" id="id_bidang_keahlian">
                    @foreach ($bidangKeahlian as $bidang)
                        <option value="{{ $bidang->id_bidang_keahlian }}"
                            {{ $bidang->id_bidang_keahlian == $programKeahlian->id_bidang_keahlian ? 'selected' : '' }}>
                            {{ $bidang->bidang_keahlian }}
                        </option>
                    @endforeach
                </select>
            </div>
            <button type="submit">Simpan</button>
        </form>
    </div>


</body>

</html>

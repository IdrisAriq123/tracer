<html lang="en">

<head>

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


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

/* Style success alert */
.alert {
    padding: 15px;
    background-color: #4CAF50;
    color: white;
    margin-bottom: 20px;
    text-align: center;
    border-radius: 6px;
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
.form-group {
    margin-bottom: 15px;
}

label {
    display: block;
    font-size: 1.1em;
    font-weight: bold;
    color: #555;
    margin-bottom: 8px;
}

/* Select input */
select {
    width: 100%;
    padding: 12px;
    border: 2px solid #ddd;
    border-radius: 6px;
    font-size: 1.1em;
    transition: border-color 0.3s;
}

/* Text input */
input,
textarea {
    width: 100%;
    padding: 12px;
    border: 2px solid #ddd;
    border-radius: 6px;
    font-size: 1.1em;
    transition: border-color 0.3s;
}

/* Focus effect */
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
    <div class="container">
        <h1 class="mt-4">Tambah Data Tracer Kerja</h1>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form action="{{ route('tracerkerja.store') }}" method="POST">
            @csrf

            <div class="form-group-active">
                <label for="id_alumni">Nama Alumni:</label>
                <select name="id_alumni" id="id_alumni" class="select2-container" required>
                    <option value="">Pilih Alumni</option>
                    @foreach ($alumni as $a)
                        <option value="{{ $a->id_alumni }}">{{ $a->nama_depan }} {{ $a->nama_belakang }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="selected_alumni_name">Nama Alumni Terpilih:</label>
                <input type="text" id="selected_alumni_name" class="form-control" readonly>
            </div>



            <div class="form-group">
                <label for="tracer_kerja_pekerjaan">Pekerjaan:</label>
                <input type="text" name="tracer_kerja_pekerjaan" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="tracer_kerja_nama">Nama Perusahaan:</label>
                <input type="text" name="tracer_kerja_nama" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="tracer_kerja_jabatan">Jabatan:</label>
                <input type="text" name="tracer_kerja_jabatan" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="tracer_kerja_status">Status:</label>
                <input type="text" name="tracer_kerja_status" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="tracer_kerja_lokasi">Lokasi:</label>
                <input type="text" name="tracer_kerja_lokasi" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="tracer_kerja_alamat">Alamat:</label>
                <textarea name="tracer_kerja_alamat" class="form-control" rows="3" required></textarea>
            </div>

            <div class="form-group">
                <label for="tracer_kerja_tgl_mulai">Tanggal Mulai:</label>
                <input type="date" name="tracer_kerja_tgl_mulai" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="tracer_kerja_gaji">Gaji:</label>
                <input type="text" name="tracer_kerja_gaji" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</body>
<script>
    $(document).ready(function() {
        // Inisialisasi Select2
        $('#id_alumni').select2({
            placeholder: "Cari dan pilih nama alumni...",
            allowClear: true,
            width: '100%' // Pastikan dropdown Select2 menyesuaikan lebar input
        });

        // Tangkap event change
        $('#id_alumni').on('change', function() {
            // Ambil teks dari opsi yang dipilih
            const selectedText = $(this).find('option:selected').text();

            // Update input dengan nama alumni yang dipilih
            $('#selected_alumni_name').val(selectedText);
        });
    });
</script>


</html>

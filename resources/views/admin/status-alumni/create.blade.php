<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Status Alumni</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
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
    --alert-btn-color: #DC060F;
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
    margin: 20px auto;
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
    color: var(--bg-1-color);
    margin-bottom: 30px;
    text-transform: uppercase;
    text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
}

/* Style form elements */
.form label {
    display: block;
    margin-bottom: 8px;
    font-size: 1.1em;
    font-weight: 500;
    color: #555;
}

.form input {
    width: 100%;
    padding: 12px;
    margin-bottom: 10px;
    border: 2px solid #ddd;
    border-radius: 6px;
    font-size: 1.1em;
    transition: border-color 0.3s;
}

.form input:focus {
    border-color: var(--bg-input-color);
    outline: none;
    box-shadow: 0 0 5px rgba(71, 130, 178, 0.5);
}

/* Button style */
.form button {
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

.form button:hover {
    background-color: #45a049;
}

/* Responsive design */
@media (max-width: 768px) {
    .form {
        padding: 20px;
    }

    h1 {
        font-size: 2.5em;
    }

    .form input {
        padding: 10px;
    }

    .form button {
        font-size: 1.1em;
    }
}

    </style>
</head>
<body>
    <div class="container">
        <h1>Tambah Status Alumni</h1>
        <div class="form">
            <form action="{{ route('status-alumni.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="status">Status</label>
                    <input type="text" id="status" name="status" required>
                </div>
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>

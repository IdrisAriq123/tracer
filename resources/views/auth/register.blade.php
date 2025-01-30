<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
       /* Font dan Background */
body {
    margin: 0;
    padding: 0;
    font-family: "Poppins", sans-serif;
    background: linear-gradient(135deg, #4facfe, #00f2fe);
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    overflow: hidden;
}

/* Efek Kaca Transparan */
.register-container {
    background: rgba(255, 255, 255, 0.15);
    backdrop-filter: blur(12px);
    -webkit-backdrop-filter: blur(12px);
    width: 380px;
    padding: 30px;
    border-radius: 15px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
    text-align: center;
    transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
}

/* Efek Hover */
.register-container:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 25px rgba(0, 0, 0, 0.4);
}

.register-container h2 {
    margin-bottom: 20px;
    font-size: 24px;
    color: #fff;
    font-weight: bold;
}

/* Input */
.register-container input {
    width: 100%;
    padding: 12px;
    margin: 12px 0;
    border: none;
    border-radius: 8px;
    font-size: 15px;
    transition: all 0.3s;
    background: rgba(255, 255, 255, 0.3);
    color: #fff;
}

/* Placeholder Styling */
.register-container input::placeholder {
    color: rgba(255, 255, 255, 0.7);
}

.register-container input:focus {
    outline: none;
    border: 2px solid #4facfe;
    background: rgba(255, 255, 255, 0.5);
}

/* Tombol Register */
.register-container button {
    background: linear-gradient(90deg, #4facfe, #00f2fe);
    color: white;
    padding: 12px;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    width: 100%;
    font-size: 17px;
    font-weight: bold;
    transition: all 0.3s ease-in-out;
}

.register-container button:hover {
    background: linear-gradient(90deg, #00f2fe, #4facfe);
    transform: scale(1.05);
}

/* Show Password */
.show-password {
    display: flex;
    align-items: center;
    font-size: 14px;
    margin-top: 5px;
    color: white;
    justify-content: center;
}

.show-password label {
    cursor: pointer;
    margin-left: 8px;
}

/* Extra Links */
.extra-links {
    margin-top: 12px;
    font-size: 14px;
    color: white;
}

.extra-links a {
    color: #ffeb3b;
    text-decoration: none;
    transition: color 0.3s;
}

.extra-links a:hover {
    text-decoration: underline;
    color: #ffcc00;
}

/* Responsif untuk layar kecil */
@media (max-width: 400px) {
    .register-container {
        width: 90%;
        padding: 25px;
    }

    .register-container h2 {
        font-size: 22px;
    }

    .register-container input {
        font-size: 14px;
    }

    .register-container button {
        font-size: 15px;
    }
}

    </style>
</head>
<body>
    <div class="register-container">
        <h2>Register</h2>
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div>
                <input type="text" name="name" placeholder="Full Name" required>
            </div>
            <div>
                <input type="email" name="email" placeholder="Gmail" required>
            </div>
            <div>
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <div>
                <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
            </div>
            <div class="show-password">
                <label>
                    <input type="checkbox" onclick="togglePassword()"> Show Password
                </label>
            </div>
            <button type="submit">Register</button>
        </form>

        <div class="extra-links">
            <p>Already have an account? <a href="{{ route('login') }}">Login</a></p>
        </div>
    </div>

    <script>
        function togglePassword() {
            const passwordField = document.querySelector('input[name="password"]');
            const confirmPasswordField = document.querySelector('input[name="password_confirmation"]');
            const type = passwordField.type === 'password' ? 'text' : 'password';
            passwordField.type = type;
            confirmPasswordField.type = type;
        }
    </script>
</body>
</html>
    
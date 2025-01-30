<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
.login-container {
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
.login-container:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 25px rgba(0, 0, 0, 0.4);
}

.login-container h2 {
    margin-bottom: 20px;
    font-size: 24px;
    color: #fff;
    font-weight: bold;
}

/* Input */
.login-container input {
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
.login-container input::placeholder {
    color: rgba(255, 255, 255, 0.7);
}

.login-container input:focus {
    outline: none;
    border: 2px solid #4facfe;
    background: rgba(255, 255, 255, 0.5);
}

/* Tombol Login */
.login-container button {
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

.login-container button:hover {
    background: linear-gradient(90deg, #00f2fe, #4facfe);
    transform: scale(1.05);
}

/* Social Login */
.social-login {
    display: flex;
    justify-content: center;
    gap: 18px;
    margin: 20px 0;
}

.social-login img {
    width: 40px;
    cursor: pointer;
    transition: transform 0.3s ease-in-out;
    filter: drop-shadow(0 4px 6px rgba(0, 0, 0, 0.2));
}

.social-login img:hover {
    transform: scale(1.2);
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

/* Show Password */
.show-password {
    display: flex;
    align-items: center;
    font-size: 14px;
    margin-top: 5px;
    color: white;
}

.show-password input {
    margin-left: 5px;
}

/* Login Icons */
.login-icons {
    display: flex;
    gap: 12px;
    justify-content: center;
    align-items: center;
}

.login-icons img {
    width: 38px;
    transition: transform 0.3s ease-in-out;
}

.login-icons img:hover {
    transform: scale(1.15);
}

/* Responsif untuk layar kecil */
@media (max-width: 400px) {
    .login-container {
        width: 90%;
        padding: 25px;
    }

    .login-container h2 {
        font-size: 22px;
    }

    .login-container input {
        font-size: 14px;
    }

    .login-container button {
        font-size: 15px;
    }
}

    </style>
</head>

<body>
    <div class="login-container">
        <h2>Login</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div>
                <input type="email" name="email" placeholder="Gmail" required>
            </div>
            <div>
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <div class="show-password">
                <label class="kosong"></label>
                <label>
                    <input type="checkbox" onclick="togglePassword()"> Show Password
                </label>
            </div>
            <button type="submit">Login</button>
        </form>

        <div class="extra-links">
            <p>Don't have an account? <a href="{{ route('register') }}">Register</a></p>
        </div>
    </div>

    <script>
        function togglePassword() {
            const passwordField = document.querySelector('input[name="password"]');
            passwordField.type = passwordField.type === 'password' ? 'text' : 'password';
        }
    </script>
</body>

</html>
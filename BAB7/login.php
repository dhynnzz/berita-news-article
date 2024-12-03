<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="login-container">
        <h1>SUDUT</h1>
        <h2>INFORMASI</h2>
        <form id="loginForm" action="login-proses.php" method="post">
            <!-- Pastikan ada name di sini -->
            <input type="text" name="nama_pengelola" id="email" placeholder="Masukan email" required>
            <input type="password" name="password" id="password" placeholder="Password" required>
            <a href="#" class="forgot-password">Forgot Password?</a>
            <button type="submit" class="login-button" name="login">Login</button>
        </form>
    </div>
</body>
</html>

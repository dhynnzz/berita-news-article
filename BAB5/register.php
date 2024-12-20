<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="css/register.css">
    
</head>
<body>
    <div class="container">
        <h1>SUDUT</h1>
        <h2>INFORMASI</h2>
        <input type="text" placeholder="Nama Depan">
        <input type="text" placeholder="Nama Belakang">
        <input type="text" class="full-width" placeholder="Email">
        <input type="password" class="full-width" placeholder="Password">
        <button>Register</button>
        <p>Sign In With</p>
        <div class="social-icons">
            <img src="gambar/twitter.png" alt="Twitter">
            <img src="gambar/instagram.png" alt="Instagram">
            <img src="gambar/facebook.png" alt="Facebook">
        </div>
    </div>

    <div id="confirmPopup" class="popup">
        <div class="popup-content">
            <p>Apakah kamu yakin?</p>
            <button onclick="confirmRegistration()">Ya</button>
            <button onclick="closeConfirmPopup()">Tidak</button>
        </div>
    </div>
    <script src="register.js"></script>
</body>
</html>

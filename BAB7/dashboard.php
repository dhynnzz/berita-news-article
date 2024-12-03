<?php
session_start();
if (!isset($_SESSION['nama_pengelola'])) {
    header('Location: login.php');
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/dashboard.css">
</head>
<body>
    <div class="sidebar">
    <ul>
    <li>Dashboard</li>
    <li><a href="tampil-data.php">Articles</a></li>
    <li>User Management</li>
    <li>Information</li>
</ul>

    </div>
    <div class="main-content">
        <div class="navbar">
            <a href="home.php">HOME</a>
            <a href="#">PROFILE</a>
            <a href="#">SETTINGS</a>
            <a href="logout.php">LOGOUT</a>
            <div class="profile-icon">👤</div>
        </div>
        <div class="articles">
            <div class="card">
                <img src="gambar/GAMBAR3.png" alt="Article 1">
                <h3>Apa Manfaat Memiliki Website untuk Bisnis?</h3>
                <p><span>Admin</span> • 3 hours ago</p>
            </div>
        </div>
        <div class="footer">
            <p>&copy; 2024 Sudut Informasi. ALL Rights Reserved</p>
        </div>
    </div>
</body>
</html>

<?php
// Koneksi ke database
$conn = new mysqli('localhost', 'root', '', 'db_si'); // Sesuaikan dengan detail koneksi Anda

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil ID dari parameter URL
$id_informasi = isset($_GET['id']) ? $_GET['id'] : null;

if (!$id_informasi) {
    die("ID Informasi tidak ditemukan.");
}

// Hapus data dari tabel tb_sumber_informasi terlebih dahulu karena memiliki relasi
$sql1 = "DELETE FROM tb_sumber_informasi WHERE id_informasi = '$id_informasi'";

// Kemudian hapus data dari tabel tb_informasi
$sql2 = "DELETE FROM tb_informasi WHERE id_informasi = '$id_informasi'";

if ($conn->query($sql1) === TRUE && $conn->query($sql2) === TRUE) {
    // Redirect ke tampil-data.php setelah berhasil dihapus
    header("Location: tampil-data.php");
    exit; // Pastikan untuk menghentikan eksekusi lebih lanjut
} else {
    echo "Terjadi kesalahan: " . $conn->error;
}

// Tutup koneksi
$conn->close();
?>

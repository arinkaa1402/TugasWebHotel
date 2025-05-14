<?php
// Menyambungkan ke database
$host = "localhost"; // Nama host, biasanya localhost
$username = "root";  // Nama pengguna database, untuk XAMPP defaultnya 'root'
$password = "";      // Password database, kosongkan jika tidak ada password
$database = "penyewaanhotel"; // Nama database yang Anda pakai

// Membuat koneksi ke database
$conn = mysqli_connect($host, $username, $password, $database);

// Cek koneksi, jika gagal tampilkan pesan error
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Jika berhasil, koneksi akan tetap ada sampai file PHP ini ditutup
?>

<?php
include "../koneksi/koneksi.php";

// form registrasi 
$username    = $_POST['username'];
$password    = $_POST['password'];
$level       = $_POST['level'];

// data di kirim ke database/tabel
$queryregistrasi = "INSERT INTO users ( username, password, level)
 VALUES ( '$username', '$password', '$level')";

// menjalankan query dan memeriksa keberhasilannya 
if (mysqli_query($conn, $queryregistrasi)) {
    echo "Data berhasil ditambahkan!";
} else {
    echo "Error: " . $queryregistrasi . "<br>" . mysqli_error($conn);
}

// menutup koneksi
mysqli_close($conn);

?>
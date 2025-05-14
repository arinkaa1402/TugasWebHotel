<?php
include "../koneksi/koneksi.php";

// form login
$username    = $_POST['username'];
$password    = $_POST['password'];

// data di kirim ke database/tabel
$querylogin = "INSERT INTO registrasi (username, password)
 VALUES ('$username', '$password')";

// menjalankan query dan memeriksa keberhasilannya 
if (mysqli_query($conn, $querylogin)) {
    echo "Data berhasil ditambahkan!";
} else {
    echo "Error: " . $querylogin . "<br>" . mysqli_error($conn);
}

// menutup koneksi
mysqli_close($conn);

?>
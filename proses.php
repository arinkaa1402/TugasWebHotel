<?php
include "koneksi/koneksi.php";

// form kamar
$idkamar   = $_POST['idkamar'];
$nokamar   = $_POST['nokamar'];
$type      = $_POST['typekamar'];
$lantai    = $_POST['lantai'];
$fasilitas = $_POST['fasilitas'];

// data di kirim ke database/tabel
$querykamar = "INSERT INTO kamar (Id_kamar, No_kamar, Type_Kamar, Lantai, Fasilitas)
 VALUES ('$idkamar', '$nokamar', '$type', '$lantai', '$fasilitas')";

// menjalankan query dan memeriksa keberhasilannya 
if (mysqli_query($conn, $querykamar)) {
    echo "Data berhasil ditambahkan!";
} else {
    echo "Error: " . $querykamar . "<br>" . mysqli_error($conn);
}

// menutup koneksi
mysqli_close($conn);

?>
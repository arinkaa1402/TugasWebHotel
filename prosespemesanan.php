<?php
include "koneksi/koneksi.php";  // Menyertakan file koneksi.php

// Kode lainnya di sini, misalnya query dan pemrosesan data

// from pemesanan 
$nama_depan = $_POST['nama_depan'];
$nama_belakang = $_POST['nama_belakang'];
$email = $_POST['email'];
$tipe_kamar = $_POST['tipe_kamar'];
$jumlah_tamu = $_POST['jumlah_tamu'];
$tanggal_dan_waktu_kedatangan = $_POST['tanggal_kedatangan'] . ' ' . $_POST['waktu_kedatangan'];
$tanggal_keberangkatan = $_POST['tanggal_keberangkatan'];
$permintaan_khusus = $_POST['permintaan_khusus'];


// data dikirim ke database/tabel
$querypemesanan = "INSERT INTO pemesanan (nama_depan, nama_belakang, email, tipe_kamar, jumlah_tamu, tanggal_dan_waktu_kedatangan, tanggal_keberangkatan, permintaan_khusus)
VALUES ('$nama_depan', '$nama_belakang', '$email', '$tipe_kamar', '$jumlah_tamu', '$tanggal_dan_waktu_kedatangan', '$tanggal_keberangkatan', '$permintaan_khusus')";

// menjalankan query dan memeriksa keberhasilannya
if (mysqli_query($conn, $querypemesanan)) {
    echo "Data berhasil ditambahkan!";
} else {
    echo "Error: " . $querypemesanan . mysqli_error($conn);
}

// menutup koneksi
mysqli_close($conn);

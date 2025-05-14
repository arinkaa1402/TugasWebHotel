<?php
session_start();

include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($conn, "select = from user where username = '$username' and password = '$password'");

<?php
// Menampilkan pesan jika ada kesalahan atau sukses
if (isset($_GET['error'])) {
    echo "<p style='color:red;'>Terjadi kesalahan, silakan coba lagi!</p>";
}
if (isset($_GET['success'])) {
    echo "<p style='color:green;'>Registrasi berhasil! Silakan login.</p>";
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="prosesregistrasi.php" method="POST">
    <h2>Form Registrasi</h2>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>

        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required><br><br>
 
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <label for="level">Level:</label>
        <select name="level" id="level" required>
            <option value="admin">Admin</option>
            <option value="user">User</option>
        </select><br><br>

        <input type="submit" value="Registrasi">
    </form>
</body>

</html>
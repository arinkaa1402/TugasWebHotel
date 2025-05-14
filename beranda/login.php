<?php
// Menampilkan pesan jika ada kesalahan login
if(isset($_GET['error'])) {
    echo "<p style='color:red;'>Username atau password salah!</p>";
}
?>

<!DOCTYPE html>
<html lang="id">
<head>                       
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styless.css">  
</head>
<body>
    <form action="proseslogin.php" method="POST">
    <h2>Login</h2>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        
        <input type="submit" value="Login">
    </form>
</body>
</html>

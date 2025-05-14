<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pesan Kamar</title>
</head>
<body>

    <form action="proses.php" method="post">
        <h2>Form Pemesanan Kamar</h2>
        <label for="idkamar">ID Kamar:</label>
        <input type="text" id="idkamar" name="idkamar" placeholder="Masukan ID Kamar"><br>
        
        <label for="nokamar">Nomor Kamar:</label>
        <input type="text" id="nokamar" name="nokamar" placeholder="Masukan No Kamar"><br>
        
        <label for="typekamar">Type Kamar:</label>
        <input type="text" id="typekamar" name="typekamar" placeholder="Masukan Type Kamar"><br>
        
        <label for="lantai">Lantai:</label>
        <input type="text" id="lantai" name="lantai" placeholder="Masukan Lantai"><br>
        
        <label for="fasilitas">Fasilitas:</label>
        <input type="text" id="fasilitas" name="fasilitas" placeholder="Masukan Fasilitas"><br>

        <button type="submit">Pesan</button>
    </form>

</body>
</html>

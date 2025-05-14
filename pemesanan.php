<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan Hotel</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Welcome To Pemesanan Hotel</h1>   
        <form action="prosespemesanan.php" method="POST">
    <div class="form-group">
        <label for="nama-depan">Nama Depan</label>
        <input type="text" id="nama-depan" name="nama_depan" placeholder="Nama Depan" required>
        <label for="nama-belakang">Nama Belakang</label>
        <input type="text" id="nama-belakang" name="nama_belakang" placeholder="Nama Belakang" required>
    </div>
    <div class="form-group">
        <label for="email">E-mail *</label>
        <input type="email" id="email" name="email" placeholder="contoh: nama@contoh.com" required>
    </div>
    <div class="form-group">
        <label for="tipe-kamar">Tipe Kamar</label>
        <select id="tipe-kamar" name="tipe_kamar" required>
            <option value="">Please Select</option>
            <option value="standard">Standard</option>
            <option value="deluxe">Deluxe</option>
            <option value="suite">Suite</option>
        </select>
    </div>
    <div class="form-group">
        <label for="jumlah-tamu">Jumlah Tamu</label>
        <input type="number" id="jumlah-tamu" name="jumlah_tamu" value="0" min="0" required>
    </div>
    <div class="form-group">
        <label for="tanggal-kedatangan">Tanggal & Waktu Kedatangan</label>
        <input type="date" id="tanggal-kedatangan" name="tanggal_kedatangan" required>
        <input type="time" id="waktu-kedatangan" name="waktu_kedatangan" required>
    </div>
    <div class="form-group">
        <label for="tanggal-keberangkatan">Tanggal Keberangkatan *</label>
        <input type="date" id="tanggal-keberangkatan" name="tanggal_keberangkatan" required>
    </div>
    <div class="form-group">
        <label for="permintaan-khusus">Permintaan Khusus</label>
        <textarea id="permintaan-khusus" name="permintaan_khusus" placeholder="Ketik di sini..."></textarea>
    </div>
    <button type="submit">Kirim</button>
</form>

</body>
</html>
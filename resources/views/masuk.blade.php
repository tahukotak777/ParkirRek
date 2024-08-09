@vite('resources/css/app.css')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk Kendaraan</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <h1>PARKIR REKK!</h1>
    </header>

    <nav>
        <a href="index.html" class="button">Masuk Kendaraan</a>
        <a href="keluar.html" class="button">Keluar Kendaraan</a>
    </nav>

    <main>
        <form id="form-masuk">
            <label for="platNomor">Nomor Plat Kendaraan:</label>
            <input type="text" id="platNomor" name="platNomor" required>

            <label for="tanggalMasuk">Tanggal Masuk:</label>
            <input type="date" id="tanggalMasuk" name="tanggalMasuk" required>

            <label for="waktuMasuk">Waktu Masuk:</label>
            <input type="time" id="waktuMasuk" name="waktuMasuk" required>

            <label for="karcis">Nomor Karcis:</label>
            <input type="text" id="karcis" name="karcis" required>

            <label for="barcode">Barcode Parkir:</label>
            <input type="text" id="barcode" name="barcode" required>

            <button type="submit">Simpan</button>
        </form>
    </main>

    <script src="js/masuk.js"></script>
</body>
</html>

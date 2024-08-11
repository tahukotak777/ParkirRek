@vite('resources/css/app.css')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keluar Kendaraan</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <h1>PARKIR REKK!</h1>
    </header>

    <nav>
        <a href="/" class="button">Masuk Kendaraan</a>
        <a href="/keluar" class="button">Keluar Kendaraan</a>
    </nav>

    <main>
        <form id="form-keluar" action="/keluar/parkir" method="post">
            <label for="barcodeMasuk">Scan Barcode Masuk:</label>
            <input type="text" id="barcodeMasuk" name="barcodeMasuk" required>

            <label for="sntk">STNK Kendaraan:</label>
            <input type="text" id="sntk" name="sntk" required>

            <button type="submit">Hitung Biaya</button>
        </form>

        <div id="biayaParkir">
            <!-- Tempat menampilkan biaya parkir -->
        </div>
    </main>

    <script src="js/keluar.js"></script>
</body>
</html>

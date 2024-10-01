@vite('resources/css/app.css')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <header>
        <img src="{{asset("Image/MotoCycle.png")}}" alt="motor">
        <h1>PARKIR REKK!</h1>
        <img src="{{asset("Image/Car.png")}}" alt="Car">
    </header>

    <nav>
        <a href="/" class="button">Masuk Kendaraan <img src="{{asset("Image/Masuk.png")}}" alt="masuk"></a>
        <a href="/tiket" class="button">Barcode Karcis <img src="{{asset("Image/Barcode.png")}}" alt="barcode"></a>
    </nav>

    <main>

        <form id="form-masuk" action="/masuk/parkir" method="post">
            @csrf
            <label for="plat">Nomor Plat Kendaraan : </label>
            <input type="text" id="plat" name="plat" required>
            @if ($errors->has('plat'))
            <div class="error">{{ $errors->first('plat') }}</div>
            @endif

            <button type="submit">masuk</button>
        </form>

        <div class="peraturan">
            <h1>peraturan</h1>
            <ul>
                <li>Biaya parkir per 1 jam = Rp. 2.000</li>
                <li>Denda parkir 24 jam = Rp. 100.000</li>
                <li>Wajib Membawa STNK & Membawa Helm</li>
            </ul>
        </div>
    </main>
</body>

</html>
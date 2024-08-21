@vite('resources/css/app.css')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk Kendaraan</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <header>
        <h1>PARKIR REKK!</h1>
    </header>

    <nav>
        <a href="/" class="button">Masuk Kendaraan</a>
        <a href="/tiket" class="button">Barcode Karcis</a>
    </nav>

    <main>

        <form id="form-masuk" action="/masuk/parkir" method="post">
            @csrf
            <label for="plat">Nomor Plat Kendaraan:</label>
            <input type="text" id="plat" name="plat" required>
            @if ($errors->has('plat'))
            <div class="error">{{ $errors->first('plat') }}</div>
            @endif

            <button type="submit">masuk</button>
        </form>
    </main>
</body>

</html>
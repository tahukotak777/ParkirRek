@vite('resources/css/app.css')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <header>
        <img src="{{asset("Image/MotoCycle.png")}}" alt="motor">
        <h1>PARKIR REKK!</h1>
        <img src="{{asset("Image/Car.png")}}" alt="Car">
    </header>

    <main class="center">
        <div>
            <h1>pembayaran</h1>
            <h4>plat nomer: {{$pembayaran->plat}}</h4>
            <h4>masuk tanggal: {{$pembayaran->tanggal}}</h4>
            <h4>masuk jam: {{$pembayaran->jam}}</h4>
            <h4>biaya: @currency($pembayaran->biaya)</h4>
        </div>

        <div>
            <form action="/pembayaran/bayar" method="post">
                @csrf
                <button type="submit">
                    selesai membayar
                </button>
            </form>
        </div>
    </main>
</body>

</html>
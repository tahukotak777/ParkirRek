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
        <h1>PARKIR REKK!</h1>
    </header>

    <main class="center">
        <div>
            <h1>tiket</h1>
            <h4>plat nomer: {{$plat}}</h4>
            <h4>masuk tanggal: {{$tanggal}}</h4>
            <h4>masuk jam: {{$jam}}</h4>
        </div>
        <div class="qrcode">
            {{ $qrCode }}
        </div>
        @if ($bayar)
        <div>
            <button>selesai pembayaran</button>
        </div>
        @endif
    </main>

</body>

</html>
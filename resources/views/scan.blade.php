@vite('resources/css/app.css')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scan QR Code</title>
    <script src="https://unpkg.com/html5-qrcode/minified/html5-qrcode.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5-qrcode/2.1.4/html5-qrcode.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <header>
        <img src="{{asset("Image/MotoCycle.png")}}" alt="motor">
        <h1>PARKIR REKK!</h1>
        <img src="{{asset("Image/Car.png")}}" alt="Car">
    </header>

    <main class="center">
        <h1>Scan QR Code</h1>
        <div id="reader" style="width:300px;"></div>
        <form action="/scan/qrcode" method="POST" id="formQR">
            @csrf
            <input type="text" name="qrcode_result" id="qrcode_result" placeholder="QR Code result will appear here" readonly required class="input_invisible">
        </form>
    </main>

    <script type="text/javascript">
        function onScanSuccess(decodedText, decodedResult) {
            // Menempatkan hasil scan ke input field
            document.getElementById('qrcode_result').value = decodedText;
            // Hentikan scanning setelah mendapatkan hasil
            html5QrcodeScanner.clear();
            document.getElementById('formQR').submit()
        }

        function onScanError(errorMessage) {
            // Handle scan error jika perlu
        }

        let html5QrcodeScanner = new Html5QrcodeScanner(
            "reader", {
                fps: 10,
                qrbox: 250
            });
        html5QrcodeScanner.render(onScanSuccess, onScanError);
    </script>
</body>

</html>
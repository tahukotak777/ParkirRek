<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="app.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">

        <div class="container">
            <div class="row justify-content-start">
                <div class="col-4">
                </div>
                <div class="col-4">
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-4">
                </div>
                <div class="col-4">
                </div>
            </div>
            <div class="row justify-content-end">
                <div class="col-4">
                </div>
                <div class="col-4">
                </div>
            </div>
            <div class="row justify-content-around">
                <a class="navbar-brand" href="#">
                    <img src="{{asset("Image/ParkirRek.png")}}" width="30" height="30" class="d-inline-block align-top" alt="">
                    ParkirRek!
                </a>
                <div class="col-4">
                </div>
                <div class="col-4">
                </div>
            </div>
            <div class="row justify-content-between">
                <div class="col-4">
                </div>
                <div class="col-4">
                </div>
            </div>
            <div class="row justify-content-evenly">
                <div class="col-4">
                </div>
                <div class="col-4">
                </div>
            </div>
        </div>

        <form class="form-inline my-2 my-lg-0" style="margin-right: 10px;">
            <a class="btn btn-outline-success my-2 my-sm-0" type="submit" href="{{ route('login') }}">Login</a>
            <a class="btn btn-outline-success my-2 my-sm-0" type="submit" href="{{ route('signup') }}">SignUp</a>
        </form>

    </nav>

    <div class="container" style="margin-top: 50px;">
        <div class="col">
            <h2>Welcome, Admin!</h2>
            <p>Use the navigation above to manage the application.</p>

            <form class="form-inline my-2 my-lg-0" style="width: 20%; display: flex;">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="margin-right: 10px;">Search</button>
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            </form>

        </div>

        <table class="table" style="margin-left: -5px;">
            <thead>
                <tr>
                    <th scope="col">Nomor Plat</th>
                    <th scope="col">Masuk</th>
                    <th scope="col">Keluar</th>
                    <th scope="col">Pembayaran</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="row">None</td>
                    <td>None</td>
                    <td>None</td>
                    <td>None</td>
                </tr>
                <tr>
                    <td scope="row">None</td>
                    <td>None</td>
                    <td>None</td>
                    <td>None</td>
                </tr>
                <tr>
                    <td scope="row">None</td>
                    <td>None</td>
                    <td>None</td>
                    <td>None</td>
                </tr>
                <tr>
                    <td scope="row">None</td>
                    <td>None</td>
                    <td>None</td>
                    <td>None</td>
                </tr>
                <tr>
                    <td scope="row">None</td>
                    <td>None</td>
                    <td>None</td>
                    <td>None</td>
                </tr>
            </tbody>
        </table>

        <nav>
            <ul>
                <li><a href="{{ route('admin.users') }}">Manage Users</a></li>
                <li><a href="{{ route('admin.settings') }}">Settings</a></li>
                <li><a href="{{ route('logout') }}">Logout</a></li>
            </ul>
        </nav>
    </div>

</body>

</html>
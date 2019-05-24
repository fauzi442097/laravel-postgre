<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kelola Data - @yield('title')</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>

<body>

    {{-- header --}}
    <div class="postition-fixed">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand" href="/">Laravel-Postgre</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

        </nav>
    </div>

    <div class="container-fluid text-white h-100">

        <div class="row">

            {{-- sidebar --}}
            <div class="col-md-2 bg-dark">
                <ul class="list-group mt-2 mb-2 bg-secondary">
                    <li class="list-group-item" aria-disabled="true" style="background-color:#464d54;">Kelola
                        Data</li>
                </ul>
                <ul class="list-group">
                    <li class="list-group-item bg-secondary" style="cursor:pointer;"
                        onclick="return window.location.href='/mahasiswa'">&nbsp;&nbsp;Mahasiswa</li>

                </ul>
            </div>

            {{-- content --}}
            <div class="col bg-white">
                @yield('content')
            </div>

        </div>
    </div>

    <script src="js/jquery-3.4.1.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>

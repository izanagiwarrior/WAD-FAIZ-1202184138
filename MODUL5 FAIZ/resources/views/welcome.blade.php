<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ximi Store</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    {{-- Style --}}
    <style>
        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 50%;

        }

        .form-group {
            margin: 20px 250px; // for left and right margin
            margin: 250px 0; // form top and bottom margin

        }

    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    </head>


<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-white">
        <div class="navbar-collapse collapse w-100 order-1 order-md-0">
            <ul class="navbar-nav ml-auto mx-auto text-center">
                <li class="nav-item active">
                    <a class="nav-link text-dark font-weight-bold" href="home">HOME</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link text-dark font-weight-bold" href="product">PRODUCT</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link text-dark font-weight-bold" href="order">ORDER</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link text-dark font-weight-bold" href="history">HISTORY</a>
                </li>
            </ul>
        </div>
    </nav>
    <br><br>
    @yield('content')
</body>

</html>

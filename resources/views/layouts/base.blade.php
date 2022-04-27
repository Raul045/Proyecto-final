<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/estilohome.css') }}">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <title>Home</title>
</head>
<body>

    <header class="header">
        <div class="container">
            <div class="row align-items-center justify-content-beteween">
                <div class="logo">
                    <a href="#">¡Bienvenido! {{ auth()->user()->name }}</a>
                </div>
                <button type="submit" class="nav-toogler">
                    <span></span>
                </button>
                <nav class="nav">
                    <ul>
                        <li><a href="/Dashboard" class="active">Home</a></li>
                        <li><a href="/Mostrar">Parrafos</a></li>
                        <li>
                            <form action="/Salir" method="POST">
                                @csrf
                                <button id="boton">Salir</button
                            </form>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    @yield('content')
    <script type="text/javascript" src="{{ asset('./querys/jsquerys.js') }}"></script>
</body>
</html>
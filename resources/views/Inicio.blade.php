<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
</head>

<body>
    <form action="/Login" class="form-box animated fadeInUp" method="POST">
        @csrf
        <h1 class="form-title">Login</h1>
        <input type="text" name="email" placeholder="Correo electronico" autofocus>
        <input type="password" name="password" placeholder="Contraseña">
        <button type="submit">
            Login
        </button>
        <a href="/">No tienes cuenta</a>
    </form>
</body>

</html>
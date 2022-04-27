<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <title>Registrate</title>
</head>
<body>
    <form action="/Registro" method="POST" class="form-box animated fadeInUp">
        @csrf
        <h1 class="form-title">Registrate</h1>
        <input type="text" name="name" placeholder="Nombre" autofocus required>
        <input type="email" name="email" placeholder="Correo electronico" required>
        <input type="password" name="password" placeholder="Contraseña" required>
        <button type="submit">
            Registrarse
        </button>
        <a href="/iniciar_sesion">Ya tienes cuenta</a>
    </form>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <h2>Hola Bienvenido: {{$elcorreo['nombre']}} es un place conocerte</h2>
    </center>
    <p>gracias por elegir nuestro servicios</p>
    <p>para acceder este es tu codigo: {{$elcorreo['codigo']}}</p>
</body>
</html>
<?php
session_start();

if (!isset($_SESSION["idUsuario"])) {
    header("Location: prueba-registro.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Correo registrado</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Fuentes de Google -->
    <link href="https://fonts.googleapis.com/css2?family=Abyssinica+SIL&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <style>
        body {
            font-family: "Noto Sans", sans-serif;
            font-optical-sizing: auto;
            font-style: normal;
            font-variation-settings:
            "wdth" 100;
        }

        html, body {
            height: 100%;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #ffffff;
        }
        .container {
            text-align: center;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            
        }
        .btn-primary {
            width: 150px;
            margin: 10px;
        }

        h1{
            font-weight: bold;
        }

        p{
            font-size: 1.2em;
            margin: 2em 0;
        }

    </style>
</head>
<body>
    <div class="container">
        <h2>Este correo ya ha sido registrado</h2>
        <p>Recuerda que tambien puedes consultar tus resultados en tu correo electronico</p>
        <a href="reporte.php" class="btn btn-primary">Ver resultado</a>
        <a type="button" class="btn btn-primary">Reintentar prueba</a>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

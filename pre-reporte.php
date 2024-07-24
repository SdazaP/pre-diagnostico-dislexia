<?php
session_start();

if (!isset($_SESSION["idUsuario"])) {
    header("Location: prueba-registro.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Has finalizado</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Fuentes de Google -->
    <link href="https://fonts.googleapis.com/css2?family=Abyssinica+SIL&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="images/favicon.png">
    <style>
        body {
            font-family: "Noto Sans", sans-serif;
            font-optical-sizing: auto;
            font-style: normal;
            font-variation-settings:
                "wdth" 100;
        }

        html,
        body {
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

        h1 {
            font-weight: bold;
        }

        p {
            font-size: 1.2em;
            margin: 2em 0;
        }
    </style>
    <script>
        function registerTime() {
            const endTime = new Date();
            const timeSpent = endTime - startTime;

            let totalTimeSpent = localStorage.getItem('totalTimeSpent');
            if (totalTimeSpent) {
                totalTimeSpent = parseInt(totalTimeSpent) + timeSpent;
            } else {
                totalTimeSpent = timeSpent;
            }
            //Manda los datos a log-time.php
            navigator.sendBeacon('db/log-time.php', JSON.stringify({
                timeSpent: totalTimeSpent
            }));

            // Limpia almacenamiento 
            localStorage.removeItem('totalTimeSpent');
        }

        let startTime;

        window.onload = function() {
            startTime = new Date();
            registerTime();
        }
    </script>
</head>

<body>
    <div class="container">
        <h2>Felicidades</h2>
        <p>Has completado la prueba</p>
        <a href="reporte.php" class="btn btn-primary">Ver resultado</a>
    </div>
</body>

</html>

<?php
/* header("Location: reporte.php");
exit; */
?>
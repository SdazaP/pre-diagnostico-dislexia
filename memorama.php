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
    <title>Memorama</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Abyssinica+SIL&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/timerInicio.js"></script>
</head>

<body>

    <div class="container encabezado-memo">
        <div class="texto-memo">
            <h1>Memorama</h1>
            <p>Para jugar al memorama, haz clic en dos cartas para descubrirlas; si son iguales, permanecerán descubiertas, y si no, se volverán a ocultar. El objetivo es emparejar todas las cartas.</p>
        </div>
    </div>

    <div class="memory-game">
        <div id="memory-cards" class="memo-cards"></div>
    </div>

    <div id="div-btn-sig" class="div-btn-sig" style="display: none;">
        <a class="btn btn-primary sig-btn" href="ejercicio-cubos/ejercicio-cubos.php" role="button">Siguiente prueba</a>
    </div>

    <div class="modal fade" id="modalGanador" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <img src="images/check.png" alt="Éxito">
                    <h2>¡Has ganado!</h2>
                    <div id="div-btn-sig" class="div-btn-sig">
                        <a class="btn btn-primary sig-btn" href="ejercicio-cubos/ejercicio-cubos.php" role="button">Siguiente prueba</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/memorama.js"></script>
    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>
<?php
session_start();

if (!isset($_SESSION["idUsuario"])) {
    header("Location: prueba-registro.php");
    exit();
}

$idUsuario = $_SESSION["idUsuario"];

include("db/db.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Resultados</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        h1 {
            margin: 0 0 2em 0;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1>Tus resultados</h1>
        <div class="row" id="reportes">
            <?php
                $stmt = $conexion->prepare("SELECT idReporte, fecha FROM reporte WHERE idUsuario = :idUsuario");
                $stmt->bindParam(':idUsuario', $idUsuario, PDO::PARAM_INT);
                $stmt->execute();
            
                $stmt->setFetchMode(PDO::FETCH_ASSOC);
                $result = $stmt->fetchAll();
            
                if (count($result) > 0) {
                    foreach ($result as $row) {
                        echo '<div class="col-md-4 mb-4">';
                        echo '<div class="card">';
                        echo '<div class="card-body">';
                        echo '<a href="reporte.php?id=' . $row["idReporte"] . '" class="stretched-link">';
                        echo '<h5 class="card-title">Reporte ID: ' . $row["idReporte"] . '</h5>';
                        echo '<p class="card-text">Fecha: ' . $row["fecha"] . '</p>';
                        echo '</a>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    }
                } else {
                    echo '<p>No hay resultados.</p>';
                }
            ?>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

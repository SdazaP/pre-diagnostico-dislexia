<?php
session_start();

if (!isset($_SESSION["idUsuario"])) {
    header("Location: prueba-registro.php");
    exit();
}

$idUsuario = $_SESSION["idUsuario"];

include("db/db.php");

// Obtener el nombre del usuario
$stmtNombre = $conexion->prepare("SELECT nombre FROM usuario WHERE idUsuario = :idUsuario");
$stmtNombre->bindParam(':idUsuario', $idUsuario, PDO::PARAM_INT);
$stmtNombre->execute();
$nombreUsuario = $stmtNombre->fetchColumn();

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Resultados</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="images/favicon.png">
    <style>
        h1 {
            margin: 0 0 2em 0;
        }
        p{
            margin:0 4em 0 0;
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
                        echo '<a href="reporte.php?idR=' . $row["idReporte"] . '&idU=' . $idUsuario . '" class="stretched-link">';
                        echo '<h5 class="card-title">Reporte ID: ' . $row["idReporte"] . '</h5>';
                        echo '<p class="card-text">Fecha: ' . $row["fecha"] . '</p>';
                        echo '<p class="card-text">Usuario: ' . htmlspecialchars($nombreUsuario) . '</p>';
                        echo '</a>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    }
                } else {
                    echo '<p>No hay resultados.</p>';
                    echo '<a href="memorama.php" class="btn btn-primary">Iniciar prueba</a>';
                }
            ?>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

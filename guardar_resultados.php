<?php
session_start();

if (!isset($_SESSION["idUsuario"])) {
    header("Location: prueba-registro.php");
    exit();
}

include("db/db.php");

$rawData = file_get_contents("php://input");
$data = json_decode($rawData, true);

if (isset($data['test'], $data['correct'])) {
    $test = $data['test'];
    $correct = $data['correct'];
    $idUsuario = $_SESSION["idUsuario"];

    if (!isset($idUsuario)) {
        echo "Error: idUsuario no está definido en la sesión.";
        exit;
    }

    switch ($test) {
        case 1:
            $_SESSION['prueba1'] = $correct;
            break;
        case 2:
            $_SESSION['prueba2'] = $correct;
            break;
        case 3:
            $_SESSION['prueba3'] = $correct;
            break;
        case 4:
            $prueba1 = $_SESSION['prueba1'];
            $prueba2 = $_SESSION['prueba2'];
            $prueba3 = $_SESSION['prueba3'];
            $prueba4 = $correct;
            break;
        default:
            echo "Error: Test no definido";
            break;
    }

    if (isset($prueba1) && isset($prueba2) && isset($prueba3) && isset($prueba4)) {

        date_default_timezone_set('America/Mexico_City');
        $fechaActual = date('Y-m-d');

        $sql = "INSERT INTO reporte (idUsuario, fecha, prueba1, prueba2, prueba3, prueba4) VALUES (:idUsuario, :fecha, :prueba1, :prueba2, :prueba3, :prueba4)";
        $stmt = $conexion->prepare($sql);
        $stmt->bindParam(':idUsuario', $idUsuario);
        $stmt->bindParam(':fecha', $fechaActual);
        $stmt->bindParam(':prueba1', $prueba1);
        $stmt->bindParam(':prueba2', $prueba2);
        $stmt->bindParam(':prueba3', $prueba3);
        $stmt->bindParam(':prueba4', $prueba4);
        
        if ($stmt->execute()) {
            echo "Registro exitoso: Correctas = $correct";
            $lastId = $conexion->lastInsertId();
            $_SESSION['idReporte'] = $lastId;
            unset($_SESSION['prueba1']);
            unset($_SESSION['prueba2']);
            unset($_SESSION['prueba3']);
        } else {
            echo "Error al registrar los datos: " . implode(", ", $stmt->errorInfo());
        }
    }

}
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

        $PromedioRespuestas = ($prueba2 + $prueba3 + $prueba4) / 3;
        $PromedioTiempo = $_SESSION['TiempoPromedio'];

        $resultado = obtenerNivelDislexia($PromedioRespuestas, $PromedioTiempo);

        date_default_timezone_set('America/Mexico_City');
        $fechaActual = date('Y-m-d');

        $sql = "INSERT INTO reporte (idUsuario, fecha, prueba1, prueba2, prueba3, prueba4, Tprueba1, resultado) VALUES (:idUsuario, :fecha, :prueba1, :prueba2, :prueba3, :prueba4, :Tprueba1, :resultado)";
        $stmt = $conexion->prepare($sql);
        $stmt->bindParam(':idUsuario', $idUsuario);
        $stmt->bindParam(':fecha', $fechaActual);
        $stmt->bindParam(':prueba1', $PromedioRespuestas);
        $stmt->bindParam(':prueba2', $prueba2);
        $stmt->bindParam(':prueba3', $prueba3);
        $stmt->bindParam(':prueba4', $prueba4);
        $stmt->bindParam(':Tprueba1', $PromedioTiempo);
        $stmt->bindParam(':resultado', $resultado);
        
        if ($stmt->execute()) {
            echo "Registro exitoso";
            $lastId = $conexion->lastInsertId();
            $_SESSION['idReporte'] = $lastId;
            unset($_SESSION['prueba1']);
            unset($_SESSION['prueba2']);
            unset($_SESSION['prueba3']);
            unset($_SESSION['TiempoPromedio']);
        } else {
            echo "Error al registrar los datos: " . implode(", ", $stmt->errorInfo());
        }
    }

}

function obtenerNivelDislexia($PromedioRespuestas, $PromedioTiempo) {
    if ($PromedioRespuestas > 8 && $PromedioTiempo < 240) { 
        return "Sin síntomas de dislexia";
    }

    if ($PromedioRespuestas >= 7) {
        $ponderacionRespuestas = 8; 
    } elseif ($PromedioRespuestas >= 5) {
        $ponderacionRespuestas = 6; 
    } elseif ($PromedioRespuestas >= 3) {
        $ponderacionRespuestas = 4; 
    } else {
        $ponderacionRespuestas = 2; 
    }

    if ($PromedioTiempo <= 240) { 
        $ponderacionTiempo = 8;
    } elseif ($PromedioTiempo <= 300) { 
        $ponderacionTiempo = 6;
    } elseif ($PromedioTiempo <= 420) { 
        $ponderacionTiempo = 4;
    } else { 
        $ponderacionTiempo = 2;
    }

    $promedioPonderaciones = ($ponderacionRespuestas + $ponderacionTiempo) / 2;

    if ($promedioPonderaciones >= 7) {
        return "Leve";
    } elseif ($promedioPonderaciones >= 5) {
        return "Moderada";
    } elseif ($promedioPonderaciones >= 3) {
        return "Severa";
    } else {
        return "Profunda";
    }
}

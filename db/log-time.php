<?php
session_start();
//conexion a base de datos
include("db.php");

$idUsuario = $_SESSION["idUsuario"];
$idReporte = $_SESSION["idReporte"];

// Obtener datos de la solicitud
$rawData = file_get_contents("php://input");
$data = json_decode($rawData, true);

if (isset($data['test'], $data['tiempo'])) {
    $test = $data['test'];
    $tiempo = $data['tiempo'];
    $NombreTprueba = "Tprueba" . $test;

    $_SESSION[$NombreTprueba . 'SF'] = $tiempo;
    $_SESSION[$NombreTprueba] = formatearTiempo($tiempo);
} else {
    $Tprueba1 = $_SESSION['Tprueba1'] ?? '';
    $Tprueba2 = $_SESSION['Tprueba2'] ?? '';
    $Tprueba3 = $_SESSION['Tprueba3'] ?? '';
    $Tprueba4 = $_SESSION['Tprueba4'] ?? '';
    $timeSpent = $data['timeSpent'];

    $_SESSION['TiempoTotal'] = ($_SESSION['Tprueba2SF'] + $_SESSION['Tprueba3SF'] + $_SESSION['Tprueba4SF']);

    // Convertir el tiempo de milisegundos a minutos y segundos

    $timeSpentFormatted = formatearTiempo($timeSpent);

    // Insertar datos en la base de datos
    $sql = "UPDATE reporte SET tiempo = :timeSpent, Tprueba1 = :Tprueba1, Tprueba2 = :Tprueba2, Tprueba3 = :Tprueba3, Tprueba4 = :Tprueba4 WHERE idReporte = :idReporte";
    $stmt = $conexion->prepare($sql);
    $stmt->bindParam(':timeSpent', $timeSpentFormatted);
    $stmt->bindParam(':idReporte', $idReporte);
    $stmt->bindParam(':Tprueba1', $Tprueba1);
    $stmt->bindParam(':Tprueba2', $Tprueba2);
    $stmt->bindParam(':Tprueba3', $Tprueba3);
    $stmt->bindParam(':Tprueba4', $Tprueba4);


    //Ejecutar
    if ($stmt->execute()) {
        echo "Registro exitoso";
        unset($_SESSION['Tprueba1']);
        unset($_SESSION['Tprueba2']);
        unset($_SESSION['Tprueba3']);
        unset($_SESSION['Tprueba4']);
    } else {
        echo "Error al registrar los datos";
    }
}

function formatearTiempo($timeSpent)
{
    $timeSpentSeconds = $timeSpent / 1000; // Convertir milisegundos a segundos
    $minutes = floor($timeSpentSeconds / 60); // Obtener los minutos completos
    $seconds = $timeSpentSeconds % 60; // Obtener los segundos restantes
    $timeSpentFormatted = sprintf('%02d:%02d', $minutes, $seconds); // Formatear el tiempo en mm:ss
    return $timeSpentFormatted; // Devolver el tiempo formateado
}

<?php 
session_start(); 
//conexion a base de datos
include("db.php");

$idUsuario = $_SESSION["idUsuario"];
$idReporte = $_SESSION["idReporte"];

// Obtener datos de la solicitud
$rawData = file_get_contents("php://input");
$data = json_decode($rawData, true);

$timeSpent = $data['timeSpent'];

// Convertir el tiempo de milisegundos a minutos y segundos
$timeSpentSeconds = $timeSpent / 1000;
$minutes = floor($timeSpentSeconds / 60);
$seconds = $timeSpentSeconds % 60;
$timeSpentFormatted = sprintf('%02d:%02d', $minutes, $seconds);

// Insertar datos en la base de datos
$sql = "UPDATE reporte SET tiempo = :timeSpent WHERE idReporte = :idReporte";
$stmt = $conexion->prepare($sql);
$stmt->bindParam(':timeSpent', $timeSpentFormatted);
$stmt->bindParam(':idReporte', $idReporte);

//Ejecutar
if ($stmt->execute()) {
    echo "Registro exitoso";
} else {
    echo "Error al registrar los datos";
}

?>

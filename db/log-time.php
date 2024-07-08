<?php 
//conexion a base de datos
include("db.php");


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
$sql = "INSERT INTO reporte (tiempo) VALUES (:timeSpent)";
$stmt = $conexion->prepare($sql);
$stmt->bindParam(':timeSpent', $timeSpentFormatted);

//Ejecutar
if ($stmt->execute()) {
    echo "Registro exitoso";
} else {
    echo "Error al registrar los datos";
}

?>

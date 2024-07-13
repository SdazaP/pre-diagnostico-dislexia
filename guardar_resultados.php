<?php
session_start();
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

    $columnName = "prueba" . $test;

    $sql = "UPDATE reporte SET $columnName = :correct WHERE idUsuario = :idUsuario";
    $stmt = $conexion->prepare($sql);
    $stmt->bindParam(':correct', $correct);
    $stmt->bindParam(':idUsuario', $idUsuario);

    if ($stmt->execute()) {
        echo "Registro exitoso: Correctas = $correct";
    } else {
        echo "Error al registrar los datos: " . implode(", ", $stmt->errorInfo());
    }
} 

?>
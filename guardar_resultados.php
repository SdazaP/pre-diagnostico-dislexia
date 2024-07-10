<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dislexiakids_db";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$data = json_decode(file_get_contents('php://input'), true);
$idUsuario = $data['idUsuario'];
$idEvaluacion = $data['idEvaluacion'];
$resultados = $data['resultados'];


$stmt = $conn->prepare("INSERT INTO reporte (idEvaluacion, idUsuario, fecha, resultado, tiempo) VALUES (?, ?, NOW(), ?, ?)");
$stmt->bind_param("iiss", $idEvaluacion, $idUsuario, $resultado, $tiempo);

foreach ($resultados as $resultadoTest) {
    $resultado = json_encode($resultadoTest);
    $tiempo = "00:00:00"; 
    $stmt->execute();
}

$stmt->close();
$conn->close();

echo json_encode(['success' => true]);
?>

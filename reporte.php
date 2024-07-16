<?php

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dislexiakids_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Obtén el id del usuario desde la URL o la sesión
$idUsuario = isset($_GET['id']) ? $_GET['id'] : (isset($_SESSION["idUsuario"]) ? $_SESSION["idUsuario"] : null);

if ($idUsuario === null) {
    header("Location: prueba-registro.php");
    exit();
}

// Obtén la información del usuario
$query = "SELECT * FROM usuario WHERE idUsuario = ?";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, 's', $idUsuario);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$user_info = mysqli_fetch_assoc($result);
mysqli_stmt_close($stmt);

// Obtén el reporte del usuario
$query = "SELECT * FROM reporte WHERE idUsuario = ?";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, 's', $idUsuario);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$user_report_info = mysqli_fetch_assoc($result);
mysqli_stmt_close($stmt);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte</title>
</head>

<body>
    <div class="content">
            <h2>INFORMACIÓN</h2>
        <table>
            <tr>
                <th>Nombre</th>
                <th>Email</th>
                <th>Fecha</th>
                <th>Memorama</th>
                <th>Patrones</th>
                <th>Palabra-Imagen</th>
                <th>Completa Palabra</th>
                <th>Tiempo</th>
            </tr>
            <tr>
                <td><?php echo isset($user_info['nombre']) ? $user_info['nombre'] : ""; ?></td>
                <td><?php echo isset($user_info['correo']) ? $user_info['correo'] : ""; ?></td>
                <td><?php echo isset($user_report_info['fecha']) ? $user_report_info['fecha'] : ""; ?></td>
                <td><?php echo isset($user_report_info['prueba1']) ? $user_report_info['prueba1'] : ""; ?></td>
                <td><?php echo isset($user_report_info['prueba2']) ? $user_report_info['prueba2'] : ""; ?></td>
                <td><?php echo isset($user_report_info['prueba3']) ? $user_report_info['prueba3'] : ""; ?></td>
                <td><?php echo isset($user_report_info['prueba4']) ? $user_report_info['prueba4'] : ""; ?></td>
                <td><?php echo isset($user_report_info['tiempo']) ? $user_report_info['tiempo'] : ""; ?></td>
            </tr>
        </table>

</body>

</html>

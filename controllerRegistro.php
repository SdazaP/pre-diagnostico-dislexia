<?php
session_start();

include("db/db.php");

$error_message = '';

if (session_status() == PHP_SESSION_ACTIVE && !empty($_SESSION)) {
    $_SESSION = array();
    session_destroy();
    header("Location: prueba-registro.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombre = $_POST['nombre'] ?? '';
    $email = $_POST['email'] ?? '';

    // Verificar si el correo ya existe
    $sql = "SELECT * FROM usuario WHERE correo = :correo";
    $stmt = $conexion->prepare($sql);
    $stmt->bindParam(':correo', $email);
    $stmt->execute();

    $usuarioExistente = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($usuarioExistente) {
        // El correo ya está registrado, mostrar el mensaje
        $error_message = "Usuario ya registrado, por favor revisa tu correo para ver tus resultados";
    } else {
        // El correo no está registrado, proceder con la inserción
        $sql = "INSERT INTO usuario (nombre, correo) VALUES (:nombre, :correo)";
        $stmt = $conexion->prepare($sql);
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':correo', $email);

        if (!$stmt->execute()) {
            $error_message = "Error al crear registro";
        } else {
            $lastId = $conexion->lastInsertId();
            $_SESSION['idUsuario'] = $lastId;

            date_default_timezone_set('America/Mexico_City');
            $fechaActual = date('Y-m-d');

            $sql = "INSERT INTO reporte (idUsuario, fecha) VALUES (:idUsuario, :fecha)";
            $stmt = $conexion->prepare($sql);
            $stmt->bindParam(':idUsuario', $lastId);
            $stmt->bindParam(':fecha', $fechaActual);

            if (!$stmt->execute()) {
                $error_message = "Error al crear registro en reporte";
            } else {
                header('Location: memorama.php');
                exit();
            }
        }
    }
}
?>

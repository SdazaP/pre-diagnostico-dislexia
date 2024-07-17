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
        // El correo ya está registrado, manda a sesion-alerta
        $_SESSION['idUsuario'] = $usuarioExistente['idUsuario'];
        header('Location: sesion-alerta.php');
        exit();
        
    } else {
        // El correo no está registrado, proceder con la inserción
        $sql = "INSERT INTO usuario (nombre, correo) VALUES (:nombre, :correo)";
        $stmt = $conexion->prepare($sql);
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':correo', $email);

        if ($stmt->execute()) {
            $lastId = $conexion->lastInsertId();
            $_SESSION['idUsuario'] = $lastId;
            header('Location: memorama.php');
            exit();
        } else {
            $error_message = "Error al crear registro";
        }
    }
}
?>

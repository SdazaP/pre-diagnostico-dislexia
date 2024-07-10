<?php
include("db/db.php");

$error_message = '';

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
        // El correo ya está registrado, mostrar el modal
        $error_message = "Usuario ya registrado";

       
        
    } else {
        // El correo no está registrado, proceder con la inserción
        $sql = "INSERT INTO usuario (nombre, correo) VALUES (:nombre, :correo)";
        $stmt = $conexion->prepare($sql);
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':correo', $email);

        if ($stmt->execute()) {
            header('Location: memorama.html');
        } else {
            $error_message = "Error al crear registro";
        }
    }
}
?>
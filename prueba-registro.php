<?php
include("template/header.php");

include("db/db.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener los datos del formulario
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];

        // Verificar si el correo ya existe
        $sql = "SELECT * FROM usuario WHERE correo = :correo";
        $stmt = $conexion->prepare($sql);
        $stmt->bindParam(':correo', $email);
        $stmt->execute();
        $usuarioExistente = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($usuarioExistente) {
            // El correo ya está registrado, mostrar el modal
            echo "<script>
                $(document).ready(function(){
                    $('#modalGanador').modal('show');
                });
            </script>";
        } else {
            // El correo no está registrado, proceder con la inserción
            $sql = "INSERT INTO usuario (nombre, correo) VALUES (:nombre, :correo)";
            $stmt = $conexion->prepare($sql);
            $stmt->bindParam(':nombre', $nombre);
            $stmt->bindParam(':correo', $email);

            if ($stmt->execute()) {
                echo "Nuevo registro creado con éxito";
            } else {
                echo "Error al crear el registro";
            }
        }
    }
?>

<div class="regis">
    <div class="container contact">
        <div class="info-contact">
            <h1>Antes de iniciar</h1>
            <p>Por favor, ingresa tu nombre y correo para poder iniciar las pruebas. <br> Al finalizar se enviará un correo con tus resultados.
            </p>
        </div>
        <div class="form-contact">
            <form id="sesionForm" method="POST" action="prueba-registro.php">
                <div class="form-group mb-3">
                    <label for="nombre">Nombre:</label>
                    <input type="text" class="form-control" name="nombre" placeholder="Nombre de estudiante" required>
                </div>
                <div class="form-group mb-3">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" name="email" placeholder="Email de registro" required>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
</div>
<div class="container mt-4">
    <img src="images/Banner.jpeg" alt="Header Image" class="header-image img-fluid">
</div>

<div class="modal fade" id="modalGanador" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <img src="images/check.png" alt="Éxito">
                <h2>¡Has ganado!</h2>
                <button type="button" class="btn btn-primary" onclick="window.location.href='ver_resultado.php'">Ver Resultado</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Reintentar Prueba</button>
            </div>
        </div>
    </div>
</div>

<?php
include("template/footer.php");
?>

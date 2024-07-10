<?php
include("template/header.php");

include("controllerRegistro.php");
?>

<div class="regis">
    <div class="container contact">
        <div class="info-contact">
            <h1>Antes de iniciar</h1>
            <p>Por favor, ingresa tu nombre y correo para poder iniciar las pruebas. <br> Al finalizar se enviará un correo con tus resultados.
            </p>
        </div>
        <div class="form-contact">
            <form id="sesionForm" method="POST"">
                <div class="form-group mb-3">
                    <label for="nombre">Nombre:</label>
                    <input type="text" class="form-control" name="nombre" placeholder="Nombre de estudiante" required>
                </div>
                <div class="form-group mb-3">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" name="email" placeholder="Email de registro" required>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
                <?php if (!empty($error_message)) : ?>
                    <div class="alert alert-danger mt-3">
                        <?php echo $error_message; ?>
                    </div>
                <?php endif; ?>
            </form>
        </div>
    </div>
</div>
<div class="container mt-4">
    <img src="images/Banner.jpeg" alt="Header Image" class="header-image img-fluid">
</div>

<?php
include("template/footer.php");
?>

<?php
include("template/header.php");
include("controllerRegistro.php");
?>

<!-- Modal de Aviso de Privacidad -->
<div class="modal fade" id="privacyModal" tabindex="-1" role="dialog" aria-labelledby="privacyModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="privacyModalLabel">Aviso de Privacidad</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>La información que proporcione en este formulario será almacenada en nuestra base de datos junto con las respuestas de las pruebas, con el fin de generar un pre-diagnóstico y dicha información no será usada con otros fines. 
        <br>
        Al continuar, usted acepta nuestros términos y condiciones.
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Acepto</button>
      </div>
    </div>
  </div>
</div>

<div class="regis">
    <div class="container contact">
        <div class="info-contact">
            <h1>Antes de iniciar</h1>
            <p>Por favor, ingresa tu nombre y correo para poder iniciar las pruebas. <br> Al finalizar se enviará un correo con tus resultados.
            </p>
        </div>
        <div class="form-contact">
            <form id="sesionForm" method="POST">
                <div class="form-group mb-3">
                    <label for="nombre">Alias:</label>
                    <input type="text" class="form-control" name="nombre" placeholder="Ingresa un alias estudiante" required>
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

<!-- Scripts de Bootstrap y jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<!-- Script para mostrar el modal al cargar la página -->
<script>
    $(document).ready(function() {
        $('#privacyModal').modal('show');
    });
</script>

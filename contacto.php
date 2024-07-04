<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pre-Diagnostico Dislexia</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Fuentes de Google -->
    <link href="https://fonts.googleapis.com/css2?family=Abyssinica+SIL&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!-- Barra de Navegación -->
    <nav class="navbar navbar-expand-md navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="images/Logo.png" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Evaluaciones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Instituciones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Acerca</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Formulario de contacto -->
    <div class="cont">
        <div class="container contact">
            <div class="info-contact">
                <h1>Contáctanos</h1>
                <p>Tu opinión es importante para nosotros. <br>Contáctanos llenando este formulario.</p>
                <div class="img-contact">
                    <img src="images/chat.png" alt="">
                </div>
            </div>
            <div class="form-contact">
                <form id="contactForm" action="https://formspree.io/f/mwpekoqw" method="POST">
                    <div class="form-group mb-3">
                        <label for="nombre">Nombre:</label>
                        <input type="text" class="form-control" name="nombre" placeholder="Nombre de contacto">
                    </div>
                    <div class="form-group mb-3">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" name="email" placeholder="Email de contacto">
                    </div>
                    <div class="form-group mb-3">
                        <label for="asunto" class="form-label">Asunto:</label>
                        <select class="form-select" name="asunto" id="asunto" onchange="toggleOtroAsunto()">
                            <option value="" selected>Selecciona</option>
                            <option value="duda">Duda</option>
                            <option value="sugerencia">Sugerencia</option>
                            <option value="queja">Queja</option>
                            <option value="otro">Otro</option>
                        </select>
                    </div>
                    <div class="form-group mb-3" id="otroAsunto" style="display: none;">
                        <label for="otroAsunto">Por favor especifica:</label>
                        <input type="text" class="form-control" name="otroAsunto" placeholder="Especifica tu asunto">
                    </div>
                    <div class="form-group mb-3">
                        <label for="mensaje">Mensaje:</label>
                        <textarea class="form-control" name="mensaje" rows="3" placeholder="Describe tu motivo"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal de confirmación -->
    
<?php include("template/footer.php")?>
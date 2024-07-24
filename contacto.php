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
    <link rel="icon" type="image/png" href="images/favicon.png">
</head>

<body>

    <!-- Barra de Navegación -->
    <nav class="navbar navbar-expand-md navbar-light">
        <div class="contt">
            <a class="navbar-brand" href="index.php">
                <img src="images/Logo.png" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="evaluaciones.php">Evaluaciones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="catalogo-instituciones.php">Instituciones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="acerca-de.php">Acerca</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contacto.php">Contacto</a>
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
    
     <!-- Pie de Página  -->
     <footer class="footer">
        <div class="container">
            <div class="footer-head">
                <div class="img-footer">
                    <img src="images/Logo.png" alt="">
                </div>
                <div class="footer-name">
                    <h1>Pre-Diagnóstico de Dislexia en niños de 1ro y 2do grado de
                        primaria</h1>
                </div>
            </div>
            <div class="footer-center">
                <div class="mision">
                    <h4>Nuestra Misión</h4>
                    <p>Brindar un diagnóstico temprano y preciso de dislexia en niños, permitiendo una intervención oportuna que facilite su proceso de aprendizaje y mejore su calidad de vida.</p>
                </div>
                <div class="list">
                    <ul>
                        <li><a href="index.php">Inicio</a></li>
                        <li><a href="evaluaciones.php">Evaluaciones</a></li>
                        <li><a href="acerca-de.php">Acerca de</a></li>
                        <li><a href="contacto.php">Contacto</a></li>
                        <li><a href="catalogo-instituciones.php">Catalógo de Instituciones</a></li>
                    </ul>
                </div>
            </div>

        </div>
        <hr>
        <div class="footer-end">
            <p>Desarrollado por Aguilar J., Daza S. y González E. <br> I.T.S de Tepexi de Rodríguez</p>
        </div>
        </div>
    </footer>

    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="js/contacto.js"></script>

</body>

</html>
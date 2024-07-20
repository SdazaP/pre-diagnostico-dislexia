<?php include("../guardar_resultados.php")?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unir Palabras con Imágenes</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Abyssinica+SIL&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="palabra-imagenes.css">
    <script src="../js/timerInicio.js"></script>
</head>

<body>

    <section class="container mt-4 memo">
        <div class="text-center">
            <h1>Unir Palabras con Imágenes</h1>
            <h3><strong>Instrucciones: Arrastra la palabra al cuadro correspondiente debajo de la imagen correcta.</strong></h3>
            <p>Nota: Para avanzar al siguiente ejercicio debes dar una respuesta.</p>
        </div>
    </section>

    <div class="container">
        <!-- Ejercicio 1 -->
        <div id="ejercicio1">
            <h2>Ejercicio 1</h2>
            <div class="exercise-container">
                <div class="exercise-image">
                    <img src="../images/paleta.png" alt="Paleta" class="no-drag">
                    <div class="dropzone" id="dropzone1" data-exercise="1"></div>
                </div>
                <div class="exercise-words">
                    <div class="word" draggable="true" data-word="paleta">Paleta</div>
                    <div class="word" draggable="true" data-word="camisa">Camisa</div>
                    <div class="word" draggable="true" data-word="bicicleta">Bicicleta</div>
                </div>
            </div>
            <button class="siguiente-btn" onclick="nextSection('ejercicio2', 'ejercicio1')" disabled>Siguiente</button>
        </div>

        <!-- Ejercicio 2 -->
        <div id="ejercicio2" style="display:none;">
            <h2>Ejercicio 2</h2>
            <div class="exercise-container">
                <div class="exercise-image">
                    <img src="../images/camisa.png" alt="Camisa" class="no-drag">
                    <div class="dropzone" id="dropzone2" data-exercise="2"></div>
                </div>
                <div class="exercise-words">
                    <div class="word" draggable="true" data-word="camisa">Camisa</div>
                    <div class="word" draggable="true" data-word="paleta">Paleta</div>
                    <div class="word" draggable="true" data-word="helicoptero">Helicóptero</div>
                </div>
            </div>
            <button class="siguiente-btn" onclick="nextSection('ejercicio3', 'ejercicio2')" disabled>Siguiente</button>
        </div>

        <!-- Ejercicio 3 -->
        <div id="ejercicio3" style="display:none;">
            <h2>Ejercicio 3</h2>
            <div class="exercise-container">
                <div class="exercise-image">
                    <img src="../images/bicicleta.png" alt="Bicicleta" class="no-drag">
                    <div class="dropzone" id="dropzone3" data-exercise="3"></div>
                </div>
                <div class="exercise-words">
                    <div class="word" draggable="true" data-word="bicicleta">Bicicleta</div>
                    <div class="word" draggable="true" data-word="camisa">Camisa</div>
                    <div class="word" draggable="true" data-word="cansado">Cansado</div>
                </div>
            </div>
            <button class="siguiente-btn" onclick="nextSection('ejercicio4', 'ejercicio3')" disabled>Siguiente</button>
        </div>

        <!-- Ejercicio 4 -->
        <div id="ejercicio4" style="display:none;">
            <h2>Ejercicio 4</h2>
            <div class="exercise-container">
                <div class="exercise-image">
                    <img src="../images/helicoptero.png" alt="Helicóptero" class="no-drag">
                    <div class="dropzone" id="dropzone4" data-exercise="4"></div>
                </div>
                <div class="exercise-words">
                    <div class="word" draggable="true" data-word="helicoptero">Helicóptero</div>
                    <div class="word" draggable="true" data-word="piscina">Piscina</div>
                    <div class="word" draggable="true" data-word="cangrejo">Cangrejo</div>
                </div>
            </div>
            <button class="siguiente-btn" onclick="nextSection('ejercicio5', 'ejercicio4')" disabled>Siguiente</button>
        </div>

        <!-- Ejercicio 5 -->
        <div id="ejercicio5" style="display:none;">
            <h2>Ejercicio 5</h2>
            <div class="exercise-container">
                <div class="exercise-image">
                    <img src="../images/cansado.png" alt="Cansado" class="no-drag">
                    <div class="dropzone" id="dropzone5" data-exercise="5"></div>
                </div>
                <div class="exercise-words">
                    <div class="word" draggable="true" data-word="cansado">Cansado</div>
                    <div class="word" draggable="true" data-word="jirafa">Jirafa</div>
                    <div class="word" draggable="true" data-word="zapato">Zapato</div>
                </div>
            </div>
            <button class="siguiente-btn" onclick="nextSection('ejercicio6', 'ejercicio5')" disabled>Siguiente</button>
        </div>

        <!-- Ejercicio 6 -->
        <div id="ejercicio6" style="display:none;">
            <h2>Ejercicio 6</h2>
            <div class="exercise-container">
                <div class="exercise-image">
                    <img src="../images/piscina.png" alt="Piscina" class="no-drag">
                    <div class="dropzone" id="dropzone6" data-exercise="6"></div>
                </div>
                <div class="exercise-words">
                    <div class="word" draggable="true" data-word="piscina">Piscina</div>
                    <div class="word" draggable="true" data-word="cangrejo">Cangrejo</div>
                    <div class="word" draggable="true" data-word="pelota">Pelota</div>
                </div>
            </div>
            <button class="siguiente-btn" onclick="nextSection('ejercicio7', 'ejercicio6')" disabled>Siguiente</button>
        </div>

        <!-- Ejercicio 7 -->
        <div id="ejercicio7" style="display:none;">
            <h2>Ejercicio 7</h2>
            <div class="exercise-container">
                <div class="exercise-image">
                    <img src="../images/cangrejo.png" alt="Cangrejo" class="no-drag">
                    <div class="dropzone" id="dropzone7" data-exercise="7"></div>
                </div>
                <div class="exercise-words">
                    <div class="word" draggable="true" data-word="cangrejo">Cangrejo</div>
                    <div class="word" draggable="true" data-word="piscina">Piscina</div>
                    <div class="word" draggable="true" data-word="jirafa">Jirafa</div>
                </div>
            </div>
            <button class="siguiente-btn" onclick="nextSection('ejercicio8', 'ejercicio7')" disabled>Siguiente</button>
        </div>

        <!-- Ejercicio 8 -->
        <div id="ejercicio8" style="display:none;">
            <h2>Ejercicio 8</h2>
            <div class="exercise-container">
                <div class="exercise-image">
                    <img src="../images/jirafa.png" alt="Jirafa" class="no-drag">
                    <div class="dropzone" id="dropzone8" data-exercise="8"></div>
                </div>
                <div class="exercise-words">
                    <div class="word" draggable="true" data-word="jirafa">Jirafa</div>
                    <div class="word" draggable="true" data-word="zapato">Zapato</div>
                    <div class="word" draggable="true" data-word="pelota">Pelota</div>
                </div>
            </div>
            <button class="siguiente-btn" onclick="nextSection('ejercicio9', 'ejercicio8')" disabled>Siguiente</button>
        </div>

        <!-- Ejercicio 9 -->
        <div id="ejercicio9" style="display:none;">
            <h2>Ejercicio 9</h2>
            <div class="exercise-container">
                <div class="exercise-image">
                    <img src="../images/zapato.png" alt="Zapato" class="no-drag">
                    <div class="dropzone" id="dropzone9" data-exercise="9"></div>
                </div>
                <div class="exercise-words">
                    <div class="word" draggable="true" data-word="zapato">Zapato</div>
                    <div class="word" draggable="true" data-word="camisa">Camisa</div>
                    <div class="word" draggable="true" data-word="cansado">Cansado</div>
                </div>
            </div>
            <button class="siguiente-btn" onclick="nextSection('ejercicio10', 'ejercicio9')" disabled>Siguiente</button>
        </div>

        <!-- Ejercicio 10 -->
        <div id="ejercicio10" style="display:none;">
            <h2>Ejercicio 10</h2>
            <div class="exercise-container">
                <div class="exercise-image">
                    <img src="../images/pelota.png" alt="Pelota" class="no-drag">
                    <div class="dropzone" id="dropzone10" data-exercise="10"></div>
                </div>
                <div class="exercise-words">
                    <div class="word" draggable="true" data-word="pelota">Pelota</div>
                    <div class="word" draggable="true" data-word="camisa">Camisa</div>
                    <div class="word" draggable="true" data-word="piscina">Piscina</div>
                </div>
            </div>
            <a id="finalizeButton" class="sig-btn link-no-underline" href="../completa-palabra/completa-palabra.php" role="button" onclick="validateAndProceed(event)" disabled>Siguiente prueba</a>
        </div>
    </div>

    <script src="palabra-imagenes.js"></script>
</body>

</html>

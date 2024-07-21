<?php include("../guardar_resultados.php")?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Completa Palabras</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Abyssinica+SIL&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="../js/timerInicio.js"></script>
</head>

<body>

    <section class="container mt-4 memo">
        <div class="text-center">
            <h1>Completa la Palabra</h1>
            <h3><strong>Instrucciones: Arrastra la sílaba que hace falta para completar la palabra.</strong></h3>
            <p>Nota: Para avanzar al siguiente ejercicio debes dar una respuesta.</p>
        </div>
    </section>

    <div class="container">
        <!-- Ejercicio 1 -->
        <div id="ejercicio1">
            <h2>Ejercicio 1</h2>
            <div class="exercise-container">
                <div class="exercise-content">
                    <div class="word-container">
                        <div class="word-slot" id="dropzone1"></div>
                        <div class="word-slot static">le</div>
                        <div class="word-slot static">ta</div>
                    </div>
                    <div class="syllables-container">
                        <div class="syllable" draggable="true" data-syllable="pua">pua</div>
                        <div class="syllable" draggable="true" data-syllable="pa">pa</div>
                        <div class="syllable" draggable="true" data-syllable="qa">qa</div>
                    </div>
                </div>
                <div class="exercise-image">
                    <img src="../images/paleta.png" alt="Imagen Ejercicio 1" class="no-drag">
                </div>
            </div>
            <button class="siguiente-btn" onclick="nextSection('ejercicio2', 'ejercicio1')" disabled>Siguiente</button>
        </div>

        <!-- Ejercicio 2 -->
        <div id="ejercicio2" style="display:none;">
            <h2>Ejercicio 2</h2>
            <div class="exercise-container">
                <div class="exercise-content">
                    <div class="word-container">
                        <div class="word-slot static">ca</div>
                        <div class="word-slot" id="dropzone2"></div>
                        <div class="word-slot static">sa</div>
                    </div>
                    <div class="syllables-container">
                        <div class="syllable" draggable="true" data-syllable="sa">sa</div>
                        <div class="syllable" draggable="true" data-syllable="mi">mi</div>
                        <div class="syllable" draggable="true" data-syllable="ma">ma</div>
                    </div>
                </div>
                <div class="exercise-image">
                    <img src="../images/camisa.png" alt="Imagen Ejercicio 2" class="no-drag">
                </div>
            </div>
            <button class="siguiente-btn" onclick="nextSection('ejercicio3', 'ejercicio2')" disabled>Siguiente</button>
        </div>

        <!-- Ejercicio 3 -->
        <div id="ejercicio3" style="display:none;">
            <h2>Ejercicio 3</h2>
            <div class="exercise-container">
                <div class="exercise-content">
                    <div class="word-container">
                        <div class="word-slot static">bi</div>
                        <div class="word-slot" id="dropzone3"></div>
                        <div class="word-slot static">cleta</div>
                    </div>
                    <div class="syllables-container">
                        <div class="syllable" draggable="true" data-syllable="ci">ci</div>
                        <div class="syllable" draggable="true" data-syllable="si">si</div>
                        <div class="syllable" draggable="true" data-syllable="mi">mi</div>
                    </div>
                </div>
                <div class="exercise-image">
                    <img src="../images/bicicleta.png" alt="Imagen Ejercicio 3" class="no-drag">
                </div>
            </div>
            <button class="siguiente-btn" onclick="nextSection('ejercicio4', 'ejercicio3')" disabled>Siguiente</button>
        </div>

        <!-- Ejercicio 4 -->
        <div id="ejercicio4" style="display:none;">
            <h2>Ejercicio 4</h2>
            <div class="exercise-container">
                <div class="exercise-content">
                    <div class="word-container">
                        <div class="word-slot static">he</div>
                        <div class="word-slot" id="dropzone4"></div>
                        <div class="word-slot static">cop</div>
                        <div class="word-slot static">tero</div>
                    </div>
                    <div class="syllables-container">
                        <div class="syllable" draggable="true" data-syllable="li">li</div>
                        <div class="syllable" draggable="true" data-syllable="to">to</div>
                        <div class="syllable" draggable="true" data-syllable="ra">ra</div>
                    </div>
                </div>
                <div class="exercise-image">
                    <img src="../images/helicoptero.png" alt="Imagen Ejercicio 4" class="no-drag">
                </div>
            </div>
            <button class="siguiente-btn" onclick="nextSection('ejercicio5', 'ejercicio4')" disabled>Siguiente</button>
        </div>

        <!-- Ejercicio 5 -->
        <div id="ejercicio5" style="display:none;">
            <h2>Ejercicio 5</h2>
            <div class="exercise-container">
                <div class="exercise-content">
                    <div class="word-container">
                        <div class="word-slot static">som</div>
                        <div class="word-slot static">bre</div>
                        <div class="word-slot" id="dropzone5"></div>
                    </div>
                    <div class="syllables-container">
                        <div class="syllable" draggable="true" data-syllable="ro">ro</div>
                        <div class="syllable" draggable="true" data-syllable="bo">bo</div>
                        <div class="syllable" draggable="true" data-syllable="do">do</div>
                    </div>
                </div>
                <div class="exercise-image">
                    <img src="../images/sombrero.png" alt="Imagen Ejercicio 5" class="no-drag">
                </div>
            </div>
            <button class="siguiente-btn" onclick="nextSection('ejercicio6', 'ejercicio5')" disabled>Siguiente</button>
        </div>

        <!-- Ejercicio 6 -->
        <div id="ejercicio6" style="display:none;">
            <h2>Ejercicio 6</h2>
            <div class="exercise-container">
                <div class="exercise-content">
                    <div class="word-container">
                        <div class="word-slot static">Pis</div>
                        <div class="word-slot" id="dropzone6"></div>
                        <div class="word-slot static">na</div>
                    </div>
                    <div class="syllables-container">
                        <div class="syllable" draggable="true" data-syllable="si">si</div>
                        <div class="syllable" draggable="true" data-syllable="ci">ci</div>
                        <div class="syllable" draggable="true" data-syllable="li">li</div>
                    </div>
                </div>
                <div class="exercise-image">
                    <img src="../images/piscina.png" alt="Imagen Ejercicio 6" class="no-drag">
                </div>
            </div>
            <button class="siguiente-btn" onclick="nextSection('ejercicio7', 'ejercicio6')" disabled>Siguiente</button>
        </div>

        <!-- Ejercicio 7 -->
        <div id="ejercicio7" style="display:none;">
            <h2>Ejercicio 7</h2>
            <div class="exercise-container">
                <div class="exercise-content">
                    <div class="word-container">
                        <div class="word-slot static">can</div>
                        <div class="word-slot static">gre</div>
                        <div class="word-slot" id="dropzone7"></div>
                    </div>
                    <div class="syllables-container">
                        <div class="syllable" draggable="true" data-syllable="go">go</div>
                        <div class="syllable" draggable="true" data-syllable="jo">jo</div>
                        <div class="syllable" draggable="true" data-syllable="lo">lo</div>
                    </div>
                </div>
                <div class="exercise-image">
                    <img src="../images/cangrejo.png" alt="Imagen Ejercicio 7" class="no-drag">
                </div>
            </div>
            <button class="siguiente-btn" onclick="nextSection('ejercicio8', 'ejercicio7')" disabled>Siguiente</button>
        </div>

        <!-- Ejercicio 8 -->
        <div id="ejercicio8" style="display:none;">
            <h2>Ejercicio 8</h2>
            <div class="exercise-container">
                <div class="exercise-content">
                    <div class="word-container">
                        <div class="word-slot" id="dropzone8"></div>
                        <div class="word-slot static">ra</div>
                        <div class="word-slot static">fa</div>
                    </div>
                    <div class="syllables-container">
                        <div class="syllable" draggable="true" data-syllable="fi">fi</div>
                        <div class="syllable" draggable="true" data-syllable="gi">gi</div>
                        <div class="syllable" draggable="true" data-syllable="ji">ji</div>
                    </div>
                </div>
                <div class="exercise-image">
                    <img src="../images/jirafa.png" alt="Imagen Ejercicio 8" class="no-drag">
                </div>
            </div>
            <button class="siguiente-btn" onclick="nextSection('ejercicio9', 'ejercicio8')" disabled>Siguiente</button>
        </div>

        <!-- Ejercicio 9 -->
        <div id="ejercicio9" style="display:none;">
            <h2>Ejercicio 9</h2>
            <div class="exercise-container">
                <div class="exercise-content">
                    <div class="word-container">
                        <div class="word-slot static">za</div>
                        <div class="word-slot" id="dropzone9"></div>
                        <div class="word-slot static">to</div>
                    </div>
                    <div class="syllables-container">
                        <div class="syllable" draggable="true" data-syllable="pa">pa</div>
                        <div class="syllable" draggable="true" data-syllable="qa">qa</div>
                        <div class="syllable" draggable="true" data-syllable="ca">ca</div>
                    </div>
                </div>
                <div class="exercise-image">
                    <img src="../images/zapato.png" alt="Imagen Ejercicio 9" class="no-drag">
                </div>
            </div>
            <button class="siguiente-btn" onclick="nextSection('ejercicio10', 'ejercicio9')" disabled>Siguiente</button>
        </div>

        <!-- Ejercicio 10 -->
        <div id="ejercicio10" style="display:none;">
            <h2>Ejercicio 10</h2>
            <div class="exercise-container">
                <div class="exercise-content">
                    <div class="word-container">
                        <div class="word-slot" id="dropzone10"></div>
                        <div class="word-slot static">lo</div>
                        <div class="word-slot static">ta</div>
                    </div>
                    <div class="syllables-container">
                        <div class="syllable" draggable="true" data-syllable="pe">pe</div>
                        <div class="syllable" draggable="true" data-syllable="qe">qe</div>
                        <div class="syllable" draggable="true" data-syllable="que">que</div>
                    </div>
                </div>
                <div class="exercise-image">
                    <img src="../images/pelota.png" alt="Imagen Ejercicio 10" class="no-drag">
                </div>
            </div>
            <a id="finalizeButton" class="sig-btn link-no-underline" href="../pre-reporte.php" role="button">Finalizar prueba</a>
        </div>
    </div>

    <script src="completaPalabra.js"></script>
   
</body>

</html>

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
            <h3><Strong>Instrucciones: Arrastra la silaba que hace falta para acomplear la palabra.</Strong></h3>
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
                <div class="word-slot">le</div>
                <div class="word-slot">ta</div>
            </div>
            <div class="syllables-container">
                <div class="syllable" draggable="true" data-syllable="pua">pua</div>
                <div class="syllable" draggable="true" data-syllable="pa">pa</div>
                <div class="syllable" draggable="true" data-syllable="qa">qa</div>
            </div>
        </div>
        <div class="exercise-image">
            <img src="../images/paleta.png" alt="Imagen Ejercicio 1">
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
                <div class="word-slot">ca</div>
                <div class="word-slot" id="dropzone2"></div>
                <div class="word-slot">sa</div>
            </div>
            <div class="syllables-container">
                <div class="syllable" draggable="true" data-syllable="sa">sa</div>
                <div class="syllable" draggable="true" data-syllable="mi">mi</div>
                <div class="syllable" draggable="true" data-syllable="ma">ma</div>
            </div>
        </div>
        <div class="exercise-image">
            <img src="../images/camisa.png" alt="Imagen Ejercicio 2">
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
                <div class="word-slot">bi</div>
                <div class="word-slot" id="dropzone3"></div>
                <div class="word-slot">cleta</div>
            </div>
            <div class="syllables-container">
                <div class="syllable" draggable="true" data-syllable="ci">ci</div>
                <div class="syllable" draggable="true" data-syllable="si">si</div>
                <div class="syllable" draggable="true" data-syllable="mi">mi</div>
            </div>
        </div>
        <div class="exercise-image">
            <img src="../images/bicicleta.png" alt="Imagen Ejercicio 3">
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
                <div class="word-slot">he</div>
                <div class="word-slot" id="dropzone4"></div>
                <div class="word-slot">cop</div>
                <div class="word-slot">tero</div>
            </div>
            <div class="syllables-container">
                <div class="syllable" draggable="true" data-syllable="li">li</div>
                <div class="syllable" draggable="true" data-syllable="to">to</div>
                <div class="syllable" draggable="true" data-syllable="ra">ra</div>
            </div>
        </div>
        <div class="exercise-image">
            <img src="../images/helicoptero.png" alt="Imagen Ejercicio 4">
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
                <div class="word-slot">can</div>
                <div class="word-slot">sa</div>
                <div class="word-slot" id="dropzone5"></div>
            </div>
            <div class="syllables-container">
                <div class="syllable" draggable="true" data-syllable="do">do</div>
                <div class="syllable" draggable="true" data-syllable="bo">bo</div>
                <div class="syllable" draggable="true" data-syllable="ca">ca</div>
            </div>
        </div>
        <div class="exercise-image">
            <img src="../images/cansado.png" alt="Imagen Ejercicio 5">
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
                <div class="word-slot">Pis</div>
                <div class="word-slot" id="dropzone6"></div>
                <div class="word-slot">na</div>
            </div>
            <div class="syllables-container">
                <div class="syllable" draggable="true" data-syllable="si">si</div>
                <div class="syllable" draggable="true" data-syllable="ci">ci</div>
                <div class="syllable" draggable="true" data-syllable="li">li</div>
            </div>
        </div>
        <div class="exercise-image">
            <img src="../images/piscina.png" alt="Imagen Ejercicio 6">
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
                <div class="word-slot">can</div>
                <div class="word-slot">gre</div>
                <div class="word-slot" id="dropzone7"></div>
            </div>
            <div class="syllables-container">
                <div class="syllable" draggable="true" data-syllable="go">go</div>
                <div class="syllable" draggable="true" data-syllable="jo">jo</div>
                <div class="syllable" draggable="true" data-syllable="lo">lo</div>
            </div>
        </div>
        <div class="exercise-image">
            <img src="../images/cangrejo.png" alt="Imagen Ejercicio 7">
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
                <div class="word-slot">ra</div>
                <div class="word-slot">fa</div>
            </div>
            <div class="syllables-container">
                <div class="syllable" draggable="true" data-syllable="fi">fi</div>
                <div class="syllable" draggable="true" data-syllable="gi">gi</div>
                <div class="syllable" draggable="true" data-syllable="ji">ji</div>
            </div>
        </div>
        <div class="exercise-image">
            <img src="../images/jirafa.png" alt="Imagen Ejercicio 8">
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
                <div class="word-slot">za</div>
                <div class="word-slot" id="dropzone9"></div>
                <div class="word-slot">to</div>
            </div>
            <div class="syllables-container">
                <div class="syllable" draggable="true" data-syllable="pa">pa</div>
                <div class="syllable" draggable="true" data-syllable="qa">qa</div>
                <div class="syllable" draggable="true" data-syllable="ca">ca</div>
            </div>
        </div>
        <div class="exercise-image">
            <img src="../images/zapato.png" alt="Imagen Ejercicio 9">
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
                <div class="word-slot">lo</div>
                <div class="word-slot">ta</div>
            </div>
            <div class="syllables-container">
                <div class="syllable" draggable="true" data-syllable="pe">pe</div>
                <div class="syllable" draggable="true" data-syllable="qe">qe</div>
                <div class="syllable" draggable="true" data-syllable="que">que</div>
            </div>
        </div>
        <div class="exercise-image">
            <img src="../images/pelota.png" alt="Imagen Ejercicio 10">
        </div>
    </div>
    <a id="finalizeButton" class="sig-btn link-no-underline" href="../reporte.php" role="button">Finalizar</a>
</div>
    </div>

    <script src="completaPalabra.js"></script>
   
</body>

</html>

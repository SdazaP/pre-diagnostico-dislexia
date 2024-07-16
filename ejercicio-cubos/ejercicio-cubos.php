<?php include("../guardar_resultados.php")?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio de Patrones</title>
    <link rel="stylesheet" href="styles.css">
    <script src="../js/timerInicio.js"></script>
</head>
<body>
    <div class="container">
        <h1>Ejercicio de Patrones</h1>
        <h2>Instrucciones: Completa el espacio vacío arrastrando la figura que creas correcta para ti.</h2>
        <p>Nota: Para avanzar al siguiente ejercicio debes dar una respuesta.</p>
        
       <!-- Ejercicio 1 -->
<div id="exercise1-section">
    <h2>Ejercicio 1</h2>
    <div class="exercise-container">
        <div class="pattern-container">
            <div class="pattern-slot" style="background-color: yellow;"></div>
            <div class="pattern-slot" style="background-color: red; border-radius: 50%;"></div>
        </div>
        <div class="pattern-container">
            <div class="pattern-slot" style="background-color: yellow;"></div>
            <div class="pattern-slot" id="dropzone1" data-exercise="1"></div>
        </div>
        <div class="options-container">
            <div class="option" draggable="true" data-answer="option1" data-exercise="1" style="background-color: yellow; border-radius: 50%;"></div>
            <div class="option" draggable="true" data-answer="option2" data-exercise="1" style="background-color: red; clip-path: polygon(50% 0%, 100% 50%, 50% 100%, 0% 50%);"></div>
            <div class="option" draggable="true" data-answer="option3" data-exercise="1" style="background-color: red; border-radius: 50%;"></div>
            <div class="option" draggable="true" data-answer="option4" data-exercise="1" style="background-color: red;"></div>
            <div class="option" draggable="true" data-answer="option5" data-exercise="1" style="background-color: yellow;"></div>
        </div>
    </div>
    <button onclick="nextSection('exercise2-section', 'exercise1-section')" disabled>Siguiente</button>
</div>

<!-- Ejercicio 2 -->
<div id="exercise2-section" style="display:none;">
    <h2>Ejercicio 2</h2>
    <div class="exercise-container">
        <div class="pattern-container">
            <div class="pattern-slot" style="background-color: red; border-radius: 50%;"></div>
            <div class="pattern-slot" style="background-color: yellow;"></div>
        </div>
        <div class="pattern-container">
            <div class="pattern-slot" style="background-color: red; border-radius: 50%;"></div>
            <div class="pattern-slot" id="dropzone2" data-exercise="2"></div>
        </div>
        <div class="options-container">
            <div class="option" draggable="true" data-answer="option1" data-exercise="2" style="background-color: red; border-radius: 50%;"></div>
            <div class="option" draggable="true" data-answer="option2" data-exercise="2" style="background-color: yellow;"></div>
            <div class="option" draggable="true" data-answer="option3" data-exercise="2" style="background-color: red;"></div>
            <div class="option" draggable="true" data-answer="option4" data-exercise="2" style="background-color: yellow; border-radius: 50%;"></div>
            <div class="option" draggable="true" data-answer="option5" data-exercise="2" style="background-color: red;"></div>
        </div>
    </div>
    <button onclick="nextSection('exercise3-section', 'exercise2-section')" disabled>Siguiente</button>
</div>

<!-- Ejercicio 3 -->
<div id="exercise3-section" style="display:none;">
    <h2>Ejercicio 3</h2>
    <div class="exercise-container">
        <div class="pattern-container">
            <div class="pattern-slot" style="background-color: red; width: 50px; height: 50px;"></div>
            <div class="pattern-slot" style="background-color: red; width: 70px; height: 70px;"></div>
            <div class="pattern-slot" style="background-color: red; width: 50px; height: 50px;"></div>
            <div class="pattern-slot" style="background-color: red; width: 70px; height: 70px;"></div>
            <div class="pattern-slot" id="dropzone3" data-exercise="3"></div>
        </div>
        <div class="options-container">
            <div class="option" draggable="true" data-answer="option1" data-exercise="3" style="background-color: red; width: 50px; height: 50px;"></div>
            <div class="option" draggable="true" data-answer="option2" data-exercise="3" style="background-color: red; border-radius: 50%;"></div>
            <div class="option" draggable="true" data-answer="option3" data-exercise="3" style="background-color: red; clip-path: polygon(50% 0%, 100% 50%, 50% 100%, 0% 50%);"></div>
            <div class="option" draggable="true" data-answer="option4" data-exercise="3" style="background-color: red; width: 70px; height: 70px;"></div>
            <div class="option" draggable="true" data-answer="option5" data-exercise="3" style="background-color: red; border-radius: 50%; width: 50px; height: 50px;"></div>
        </div>
    </div>
    <button onclick="nextSection('exercise4-section', 'exercise3-section')" disabled>Siguiente</button>
</div>

<!-- Ejercicio 4 -->
<div id="exercise4-section" style="display:none;">
    <h2>Ejercicio 4</h2>
    <div class="exercise-container">
        <div class="pattern-container">
            <div class="pattern-slot" style="background-color: red; border-radius: 50%;"></div>
            <div class="pattern-slot" style="background-color: red; border-radius: 50%;"></div>
        </div>
        <div class="pattern-container">
            <div class="pattern-slot" style="background-color: red; border-radius: 50%;"></div>
            <div class="pattern-slot" id="dropzone4" data-exercise="4"></div>
        </div>
        <div class="options-container">
            <div class="option" draggable="true" data-answer="option1" data-exercise="4" style="background-color: yellow;"></div>
            <div class="option" draggable="true" data-answer="option2" data-exercise="4" style="background-color: blue;"></div>
            <div class="option" draggable="true" data-answer="option3" data-exercise="4" style="background-color: red; border-radius: 50%;"></div>
            <div class="option" draggable="true" data-answer="option4" data-exercise="4" style="background-color: lightblue;"></div>
            <div class="option" draggable="true" data-answer="option5" data-exercise="4" style="background-color: white; border-radius: 50%;"></div>
        </div>
    </div>
    <button onclick="nextSection('exercise5-section', 'exercise4-section')" disabled>Siguiente</button>
</div>

<!-- Ejercicio 5 -->
<div id="exercise5-section" style="display:none;">
    <h2>Ejercicio 5</h2>
    <div class="exercise-container">
        <div class="pattern-container">
            <div class="pattern-slot" style="background-color: blue; clip-path: polygon(50% 0%, 0% 100%, 100% 100%);"></div>
            <div class="pattern-slot" style="background-color: blue; width: 40px; height: 40px; clip-path: polygon(50% 0%, 0% 100%, 100% 100%);"></div>
        </div>
        <div class="pattern-container">
            <div class="pattern-slot" style="background-color: blue; clip-path: polygon(50% 0%, 0% 100%, 100% 100%);"></div>
            <div class="pattern-slot" id="dropzone5" data-exercise="5"></div>
        </div>
        <div class="options-container">
            <div class="option" draggable="true" data-answer="option1" data-exercise="5" style="background-color: blue; clip-path: polygon(50% 0%, 0% 100%, 100% 100%);"></div>
            <div class="option" draggable="true" data-answer="option2" data-exercise="5" style="background-color: blue; clip-path: polygon(50% 0%, 25% 100%, 75% 100%);"></div>
            <div class="option" draggable="true" data-answer="option3" data-exercise="5" style="background-color: blue; width: 40px; height: 40px; clip-path: polygon(50% 0%, 0% 100%, 100% 100%);"></div>
            <div class="option" draggable="true" data-answer="option4" data-exercise="5" style="background-color: blue; width: 40px; height: 40px;"></div>
            <div class="option" draggable="true" data-answer="option5" data-exercise="5" style="background-color: blue; clip-path: polygon(50% 0%, 0% 100%, 100% 100%); width: 60px; height: 60px;"></div>
        </div>
    </div>
    <button onclick="nextSection('exercise6-section', 'exercise5-section')" disabled>Siguiente</button>
</div>

<!-- Ejercicio 6 -->
<div id="exercise6-section" style="display:none;">
    <h2>Ejercicio 6</h2>
    <div class="exercise-container">
        <div class="pattern-container">
            <div class="pattern-slot" style="background-color: red; border-radius: 50%;"></div>
            <div class="pattern-slot" style="background-color: black; border-radius: 50%;"></div>
            <div class="pattern-slot" style="background-color: yellow; border-radius: 50%;"></div>
            <div class="pattern-slot" style="background-color: red; border-radius: 50%;"></div>
            <div class="pattern-slot" id="dropzone6" data-exercise="6"></div>
        </div>
        <div class="options-container">
            <div class="option" draggable="true" data-answer="option1" data-exercise="6" style="background-color: yellow; border-radius: 50%;"></div>
            <div class="option" draggable="true" data-answer="option2" data-exercise="6" style="background-color: red; border-radius: 50%;"></div>
            <div class="option" draggable="true" data-answer="option3" data-exercise="6" style="background-color: black; border-radius: 50%;"></div>
            <div class="option" draggable="true" data-answer="option4" data-exercise="6" style="background-color: blue; border-radius: 50%;"></div>
            <div class="option" draggable="true" data-answer="option5" data-exercise="6" style="background-color: red;"></div>
        </div>
    </div>
    <button onclick="nextSection('exercise7-section', 'exercise6-section')" disabled>Siguiente</button>
</div>

<!-- Ejercicio 7 -->
<div id="exercise7-section" style="display:none;">
    <h2>Ejercicio 7</h2>
    <div class="exercise-container">
        <div class="pattern-container">
            <div class="pattern-slot" style="background-color: yellow; border-radius: 50%;"></div>
            <div class="pattern-slot" style="background-color: blue; border-radius: 50%;"></div>
            <div class="pattern-slot" style="background-color: red; border-radius: 50%;"></div>
            <div class="pattern-slot" style="background-color: white; border-radius: 50%;"></div>
            <div class="pattern-slot" id="dropzone7" data-exercise="7"></div>
        </div>
        <div class="options-container">
            <div class="option" draggable="true" data-answer="option1" data-exercise="7" style="background-color: yellow; border-radius: 50%;"></div>
            <div class="option" draggable="true" data-answer="option2" data-exercise="7" style="background-color: blue; border-radius: 50%;"></div>
            <div class="option" draggable="true" data-answer="option3" data-exercise="7" style="background-color: red; border-radius: 50%;"></div>
            <div class="option" draggable="true" data-answer="option4" data-exercise="7" style="background-color: white; border-radius: 50%;"></div>
            <div class="option" draggable="true" data-answer="option5" data-exercise="7" style="background-color: orange; border-radius: 50%;"></div>
        </div>
    </div>
    <button onclick="nextSection('exercise8-section', 'exercise7-section')" disabled>Siguiente</button>
</div>

<!-- Ejercicio 8 -->
<div id="exercise8-section" style="display:none;">
    <h2>Ejercicio 8</h2>
    <div class="exercise-container">
        <div class="pattern-container">
            <div class="pattern-slot" style="background-color: green; width: 20px; height: 20px;"></div>
            <div class="pattern-slot" style="background-color: green; width: 30px; height: 30px;"></div>
            <div class="pattern-slot" style="background-color: green; width: 40px; height: 40px;"></div>
            <div class="pattern-slot" style="background-color: green; width: 50px; height: 50px;"></div>
            <div class="pattern-slot" id="dropzone8" data-exercise="8"></div>
        </div>
        <div class="options-container">
            <div class="option" draggable="true" data-answer="option1" data-exercise="8" style="background-color: green; width: 30px; height: 30px;"></div>
            <div class="option" draggable="true" data-answer="option2" data-exercise="8" style="background-color: green; width: 60px; height: 60px;"></div>
            <div class="option" draggable="true" data-answer="option3" data-exercise="8" style="background-color: green; width: 40px; height: 40px;"></div>
            <div class="option" draggable="true" data-answer="option4" data-exercise="8" style="background-color: green; width: 50px; height: 50px;"></div>
            <div class="option" draggable="true" data-answer="option5" data-exercise="8" style="background-color: green; width: 20px; height: 20px;"></div>
        </div>
    </div>
    <button onclick="nextSection('exercise9-section', 'exercise8-section')" disabled>Siguiente</button>
</div>

<!-- Ejercicio 9 -->
<div id="exercise9-section" style="display:none;">
    <h2>Ejercicio 9</h2>
    <div class="exercise-container">
        <div class="pattern-container">
            <div class="pattern-slot" style="background-color: blue; border-radius: 50%;"></div>
            <div class="pattern-slot" style="background-color: red; width: 60px; height: 60px;"></div>
            <div class="pattern-slot" style="background-color: yellow; width: 40px; height: 40px;"></div>
            <div class="pattern-slot" style="background-color: green; width: 50px; height: 50px; border-radius: 50%;"></div>
            <div class="pattern-slot" id="dropzone9" data-exercise="9"></div>
        </div>
        <div class="options-container">
            <div class="option" draggable="true" data-answer="option1" data-exercise="9" style="background-color: blue; border-radius: 50%;"></div>
            <div class="option" draggable="true" data-answer="option2" data-exercise="9" style="background-color: red; width: 60px; height: 60px;"></div>
            <div class="option" draggable="true" data-answer="option3" data-exercise="9" style="background-color: yellow; width: 40px; height: 40px;"></div>
            <div class="option" draggable="true" data-answer="option4" data-exercise="9" style="background-color: green; width: 50px; height: 50px; border-radius: 50%;"></div>
            <div class="option" draggable="true" data-answer="option5" data-exercise="9" style="background-color: purple; width: 50px; height: 50px;"></div>
        </div>
    </div>
    <button onclick="nextSection('exercise10-section', 'exercise9-section')" disabled>Siguiente</button>
</div>

<!-- Ejercicio 10 -->
<div id="exercise10-section" style="display:none;">
    <h2>Ejercicio 10</h2>
    <div class="exercise-container">
        <div class="pattern-container">
            <div class="pattern-slot" style="background-color: orange; border-radius: 50%;"></div>
            <div class="pattern-slot" style="background-color: purple; width: 40px; height: 40px; border-radius: 50%;"></div>
            <div class="pattern-slot" style="background-color: pink; width: 60px; height: 60px;"></div>
            <div class="pattern-slot" style="background-color: teal; width: 50px; height: 50px;"></div>
            <div class="pattern-slot" id="dropzone10" data-exercise="10"></div>
        </div>
        <div class="options-container">
            <div class="option" draggable="true" data-answer="option1" data-exercise="10" style="background-color: orange; border-radius: 50%;"></div>
            <div class="option" draggable="true" data-answer="option2" data-exercise="10" style="background-color: purple; width: 40px; height: 40px; border-radius: 50%;"></div>
            <div class="option" draggable="true" data-answer="option3" data-exercise="10" style="background-color: pink; width: 60px; height: 60px;"></div>
            <div class="option" draggable="true" data-answer="option4" data-exercise="10" style="background-color: teal; width: 50px; height: 50px;"></div>
            <div class="option" draggable="true" data-answer="option5" data-exercise="10" style="background-color: blue; width: 50px; height: 50px;"></div>
        </div>
    </div>
    <a id="finalizeButton" class="sig-btn link-no-underline" href="#" role="button" onclick="validateAndProceed()" disabled>Siguiente prueba</a>
    </div>


    </div>
    <script src="scripts.js"></script>
</body>
</html>
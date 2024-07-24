<?php
session_start();

include("db/db.php");

// Obtén el id del usuario desde la URL o la sesión
$idUsuario = isset($_GET['idU']) ? $_GET['idU'] : (isset($_SESSION["idUsuario"]) ? $_SESSION["idUsuario"] : null);
$idReporte = isset($_GET['idR']) ? $_GET['idR'] : (isset($_SESSION["idReporte"]) ? $_SESSION["idReporte"] : null);

if ($idUsuario === null) {
    header("Location: prueba-registro.php");
    exit();
}

// Obtén la información del usuario
$query = "SELECT * FROM usuario WHERE idUsuario = :idUsuario";
$stmt = $conexion->prepare($query);
$stmt->bindParam(':idUsuario', $idUsuario);
$stmt->execute();
$user_info = $stmt->fetch(PDO::FETCH_ASSOC);
$stmt->closeCursor();

// Obtén el reporte del usuario
$query = "SELECT * FROM reporte WHERE idReporte = :idReporte";
$stmt = $conexion->prepare($query);
$stmt->bindParam(':idReporte', $idReporte);
$stmt->execute();
$user_report_info = $stmt->fetch(PDO::FETCH_ASSOC);
$stmt->closeCursor();

if ($user_report_info['resultado'] != "Sin síntomas de dislexia") {
    $nivel_dislexia = $user_report_info['resultado'];

    $query = "SELECT * FROM niveles_dislexia WHERE nivel = :nivel";
    $stmt = $conexion->prepare($query);
    $stmt->bindParam(':nivel', $user_report_info['resultado']);
    $stmt->execute();
    $user_niveles_dislexia_info = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
}

include("template/header.php") ?>

<!-- Modal de Descargar reporte -->
<div class="modal fade" id="privacyModal" tabindex="-1" role="dialog" aria-labelledby="privacyModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="privacyModalLabel">Descarga tu reporte</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Le recomendamos descargar su reporte justo ahora para evitar que pueda perder su información.</p>
            </div>
            <div class="modal-footer">
                <button type="button" id="downloadButton" class="btn btn-primary" data-dismiss="modal">Descargar</button>
            </div>
        </div>
    </div>
</div>

<body>
    <div class="contenedor-rep">
        <div class="contenido-rep" id="content-to-pdf">
            <div class="encabezado-rep">
                <img src="images/Logo.png" class="encabezado-img img-fluid">
                <h2>Dislexia Kids Pre-Diagnóstico de Dislexia en niños
                    de 1ro y 2do grado de primaria.</h2>
            </div>
            <hr>
            <h1>Reporte</h1>
            <p>
            En este reporte se presentan los resultados obtenidos en las pruebas realizadas para la detección de dislexia en niños de 1º y 2º grado de primaria. Se ha registrado la recolección de los intentos en el juego de memorama, permitiendo evaluar la capacidad de retención y asociación visual del niño. Además, se han recolectado las respuestas correctas en las evaluaciones de Patrones de Figuras, Palabra-Imagen y Completa la Palabra. En la prueba de Patrones de Figuras, se midió la habilidad del niño para reconocer y completar patrones visuales y lógicos. En la evaluación de Palabra-Imagen, se valoró la capacidad del niño para asociar vocabulario con representaciones visuales. Finalmente, en la prueba de Completa la Palabra, se evaluaron sus habilidades de lectura y escritura al completar palabras incompletas. 
            También se tomó el tiempo para medir la velocidad a la que se realizaron las pruebas, evaluando así la rapidez y precisión del niño. Estos datos nos permiten hacer una valoración integral de las capacidades y posibles dificultades relacionadas con la dislexia, proporcionando una base para intervenciones educativas personalizadas.
            </p>
            <h3>Resultados</h3>
            <div class="cont-tabla">
                <div class="table-responsive">
                    <table class="tabla-result">
                        <tr>
                            <th>Memorama</th>
                            <th>Patrones</th>
                            <th>Palabra-Imagen</th>
                            <th>Completa Palabra</th>
                            <th>Tiempo</th>
                        </tr>
                        <tr>
                            <td><?php echo isset($user_report_info['prueba1']) ? $user_report_info['prueba1'] : ""; ?></td>
                            <td><?php echo isset($user_report_info['prueba2']) ? $user_report_info['prueba2'] : ""; ?></td>
                            <td><?php echo isset($user_report_info['prueba3']) ? $user_report_info['prueba3'] : ""; ?></td>
                            <td><?php echo isset($user_report_info['prueba4']) ? $user_report_info['prueba4'] : ""; ?></td>
                            <td><?php echo isset($user_report_info['tiempo']) ? $user_report_info['tiempo'] : ""; ?></td>
                        </tr>
                    </table>
                </div>
            </div>
            <h3>Pre-Diagnóstico</h3>
            <br>
            <?php if ($user_report_info['resultado'] != "Sin síntomas de dislexia") : ?>
                <p>Con base en los resultados obtenidos: las respuestas correctas  en las pruebas y la velocidad con la que ha respondido; se determina un tiempo: <strong><?php echo isset($user_report_info['velocidadPruebas']) ? $user_report_info['velocidadPruebas'] : ""; ?></strong>, indicando que el usuario "<strong><?php echo isset($user_info['nombre']) ? $user_info['nombre'] : ""; ?></strong>" ha obtenido un pre-diagnóstico donde su nivel de dislexia podría ser <strong><?php echo isset($user_report_info['resultado']) ? $user_report_info['resultado'] : ""; ?></strong> por lo que podría presentar las siguientes dificultades:</p>
                <ul class="list-repo">
                    <?php if (!empty($user_niveles_dislexia_info)) : ?>
                        <?php foreach ($user_niveles_dislexia_info as $nivel_dislexia) : ?>
                            <li><?php echo isset($nivel_dislexia['descripcion']) ? $nivel_dislexia['descripcion'] : ""; ?></li>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </ul>
            <?php else : ?>
                <p>Con base en los resultados obtenidos: las respuestas correctas  en las pruebas y la velocidad con la que ha respondido; se determina un tiempo: <strong><?php echo isset($user_report_info['velocidadPruebas']) ? $user_report_info['velocidadPruebas'] : ""; ?></strong>, indicando que el usuario "<strong><?php echo isset($user_info['nombre']) ? $user_info['nombre'] : ""; ?></strong>" ha obtenido un pre-diagnóstico donde no se han presentado síntomas de dislexia.</p>
            <?php endif; ?>
        </div>
    </div>

    <?php include("template/footer.php") ?>

    <!-- Incluye los scripts de html2canvas y jsPDF -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>

    <!-- Script para mostrar el modal al cargar la página -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const userName = "<?php echo isset($user_info['nombre']) ? $user_info['nombre'] : 'Desconocido'; ?>";

            document.getElementById('downloadButton').addEventListener('click', function() {
                html2canvas(document.getElementById('content-to-pdf')).then(canvas => {
                    const imgData = canvas.toDataURL('image/png');
                    const {
                        jsPDF
                    } = window.jspdf;
                    const pdf = new jsPDF();
                    const imgWidth = 210; // A4 width in mm
                    const pageHeight = 295; // A4 height in mm
                    const imgHeight = canvas.height * imgWidth / canvas.width;
                    let heightLeft = imgHeight;

                    pdf.addImage(imgData, 'PNG', 0, 0, imgWidth, imgHeight);
                    heightLeft -= pageHeight;

                    while (heightLeft >= 0) {
                        pdf.addPage();
                        pdf.addImage(imgData, 'PNG', 0, -heightLeft, imgWidth, imgHeight);
                        heightLeft -= pageHeight;
                    }

                    // Usar el nombre del usuario para el archivo PDF
                    pdf.save(`reporte_${userName}.pdf`);
                }).catch(error => {
                    console.error('Error capturing the content:', error);
                });
            });

            $('#privacyModal').modal('show');
        });
    </script>
</body>

</html>
<?php

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dislexiakids_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Obtén el id del usuario desde la URL o la sesión
$idUsuario = isset($_GET['idU']) ? $_GET['idU'] : (isset($_SESSION["idUsuario"]) ? $_SESSION["idUsuario"] : null);

$idReporte = isset($_GET['idR']) ? $_GET['idR'] : (isset($_SESSION["idReporte"]) ? $_SESSION["idReporte"] : null);

if ($idUsuario === null) {
    header("Location: prueba-registro.php");
    exit();
}

// Obtén la información del usuario
$query = "SELECT * FROM usuario WHERE idUsuario = ?";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, 's', $idUsuario);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$user_info = mysqli_fetch_assoc($result);
mysqli_stmt_close($stmt);

// Obtén el reporte del usuario
$query = "SELECT * FROM reporte WHERE idReporte = ?";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, 's', $idReporte);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$user_report_info = mysqli_fetch_assoc($result);
mysqli_stmt_close($stmt);

include("template/header.php") ?>

<body>
    <div class="contenedor-rep">
        <div class="contenido-rep">
            <div class="encabezado-rep">
                <img src="images/Logo.png" class="encabezado-img img-fluid">
                <h2>Dislexia Kids Pre-Diagnóstico de Dislexia en niños
                    de 1ro y 2do grado de primaria.</h2>
            </div>
            <hr>
            <h1>Reporte</h1>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <h3>Resultados</h3>
            <div class="cont-tabla">
                <div class="table-responsive">
                    <table class="tabla-result">
                        <tr>
                            <th>Nombre</th>
                            <th>Memorama</th>
                            <th>Patrones</th>
                            <th>Palabra-Imagen</th>
                            <th>Completa Palabra</th>
                            <th>Tiempo</th>
                            <th>Resultado Final</th>
                        </tr>
                        <tr>                            
                            <td><?php echo isset($user_info['nombre']) ? $user_info['nombre'] : ""; ?></td>
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
            <p class="pre-diag">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </div>
    </div>

    <?php include("template/footer.php") ?>
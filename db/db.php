<?php 
$host = "localhost";
$bd = "dislexiakids_db";
$usuario = "root";
$contrasenia = "";

try {

    $conexion = new PDO("mysql:host=$host;dbname=$bd",$usuario,$contrasenia);
    /* if ($conexion) {
        echo "Conectado";
    } */
} catch (Exception $ex) {
    echo $ex->getMessage();
}
?>
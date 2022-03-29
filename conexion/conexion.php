<?php
// * conexion a la base de datos

$bd = 'prueba';
$servidor = 'localhost';
$usuario = ''; //$usuario
$contrasena = ''; //$contrasena

// * Creamos la conexion a la base de datos
$conexion = mysqli_connect($servidor, $usuario, $contrasena, $bd);

// * Checamos la conexion
if (!$conexion) {
    die('Conexión a la base de datos ' . $bd . ' fallida: ' .
        mysqli_connect_error());
} else {
    echo 'Conexión a la base de datos ' . $bd . ' exitosa';
}
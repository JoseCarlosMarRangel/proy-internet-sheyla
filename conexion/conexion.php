<?php
// * conexion a la base de datos

$bd = 'upv_red';
$servidor = 'localhost';
$usuario = 'root'; //$usuario
$contrasena = ''; //$contrasena

// * Creamos la conexion a la base de datos
$conexion = mysqli_connect($servidor, $usuario, $contrasena, $bd);

// * Checamos la conexion
if (!$conexion) {
    die('Conexión a la base de datos ' . $bd . ' fallida: ' .
        mysqli_connect_error());
}

function valida_usuario_bd($usuario, $contrasena, $conexion)
{
    $query = "SELECT * FROM empleados WHERE Usuario = '$usuario' AND Password = '$contrasena'";
    //echo $query;
    $resultado = mysqli_query($conexion, $query) or die(mysqli_error($conexion));
    $filas = mysqli_num_rows($resultado);
    if (mysqli_num_rows($resultado) == 0) {
        return false;
    } else {
        return true;
    }
};

function registrar_usuario_bd($nombre, $apellido, $correo, $usuario, $password, $conexion)
{
    echo "nombre: " . $nombre . "apellido: " . $apellido . "correo: " . $correo . "usuario: " . $usuario . "password: " . $password;
    $query = "INSERT INTO ";
}
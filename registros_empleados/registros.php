<?php

require "../conexion/conexion.php";
if (isset($_POST['aceptar'])) {
    $nombre = $_POST['nomb'];
    $apellido = $_POST['ape'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (registrar_usuario_bd($nombre, $apellido, $correo, $usuario, $password, $conexion)) {
        echo "Usurio Registrado";
        $registrado = true;
    } else {
        echo "Usuario No Registrado";
        $registrado = false;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registros</title>
</head>

<body>

    <form method="post">
        <input type="text" name="nomb" placeholder="Nombre" required="required" />
        <input type="text" name="ape" placeholder="Apellido" required="required" />
        <input type="text" name="email" placeholder="Email" required="required" />
        <input type="text" name="user" placeholder="Usuario" required="required" />
        <input type="password" name="contrasena" placeholder="Contraseña" required="required" />
        <button name="aceptar" type="submit">Registrar</button>
    </form>

</body>

</html>
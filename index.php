<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/indexStyle.css">
    <title>Menú</title>
</head>

<body>
    <div class="contenedorPrincipal">
        <div class="barraSuperior">
            <?php

            session_start();
            if (!isset($_SESSION['u'])) {
                echo '<a class="scroll" href="login.php">Login</a>';
            } else {
                echo '<a class="scroll" href="./cerrar_sesion.php">Logout</a>' . "<p> usuario: " . $_SESSION['u'] . "</p>" . '</li>';
            }

            ?>

        </div>

        <div class="contenedorMedio">
            <h1>BIENVENIDO</h1>
            <p>Departamento</p>
            <a href="./Empleados/empleados_registros.php"> Registrar empleados</a>
        </div>

        <div class="contenedorInferior">

        </div>
    </div>
</body>

</html>
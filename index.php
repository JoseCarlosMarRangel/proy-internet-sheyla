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
<<<<<<< HEAD
            <a href="./Empleados/empleados_registros.php"> Registrar empleados</a>
=======
            <a href="./registros_empleados/registros.php"> Registrar empleados</a>
            
>>>>>>> c91deae6e1ade2ec3f901b6e6d00df24c6f27126
        </div>

        <div class="contenedorInferior">
            <form action="upload.php" method="POST" enctype="multipart/form-data">
                <h2>Subir archivos</h2>
                <input type="file" name="file">
                <p class="center"><input type="submit" value="subir archivos"></p>
            </form>
        </div>1
    </div>
</body>

</html>
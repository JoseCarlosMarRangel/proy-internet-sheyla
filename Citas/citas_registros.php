<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Citas General</title>
</head>

<body>

    <h1>Registrar Citas</h1>

    <form method="post">
        <input type="text" name="nomb_cliente" placeholder="Nombre" required="required" />
        <input type="number" name="tel" placeholder="Teléfono" required="required" />
        <input type="text" name="desc" placeholder="Descripción" required="required" />
        <input type="date" name="fecha" placeholder="Fecha" required="required" />
        <button name="aceptar" type="submit">Registrar Cita</button>
    </form>


    <h1>Tabla de Citas</h1>
    <br>
    <table border="1">
        <tr>
            <td>ID Cita</td>
            <td>Nombre de Cliente</td>
            <td>Teléfono</td>
            <td></td>
        </tr>
        <?php
        $sql = "select id_cita, Nombre_cliente, Telefono, Descripcion, Fechas from citas";
        $result = mysqli_query($conexion, $sql);
        while ($mostrar = mysqli_fetch_array($result)) {
        ?>
        <tr>
            <td><?php echo $mostrar['id_cita'] ?></td>
            <td><?php echo $mostrar['Nombre_cliente'] ?></td>
            <td><?php echo $mostrar['Telefono'] ?></td>
            <td><?php echo $mostrar['Descripcion'] ?></td>
            <td><?php echo $mostrar['Fechas'] ?></td>
        </tr>
        <?php
        }
        ?>
    </table>
    <br />

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>RRHH - Proveedores</title>

  <!-- stylesheets and bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
  <link rel="stylesheet" href="../css/stylemenurecursos.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../css/sidebar.css">

</head>

<body>

  <div id="mySidebar" class="sidebar">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="../frontend/rrhh_index.php">Volver</a>
    <a href="../frontend/index.php">Inicio</a>
  </div>

  <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark mb-0">
    <!-- Sidebar Toggle-->
    <button class="openbtn" onclick="openNav()">&#9776;</button>
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="#">Recursos Humanos</a>
    <!-- Navbar Search-->
    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
      <div class="input-group">
        <!--<input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />-->
        <!--<button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>-->
      </div>
    </form>
    <!-- Navbar-->
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
      <li class="nav-item dropdown">
        <?php

        session_start();
        if (!isset($_SESSION['u'])) {
          echo "<a class='nav-link dropdown-toggle' href='#' id='navbarDropdownMenuLink' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
              <i class='fas fa-user fa-fw'></i>Usuario</a>";
          echo "<div class='dropdown-menu dropdown-menu-right' aria-labelledby='navbarDropdownMenuLink'>";
          echo "<a class='dropdown-item' href='./login.php'>Iniciar sesión</a>";
          echo "</div>";
        } else {
          echo "<a class='nav-link dropdown-toggle' href='#' id='navbarDropdownMenuLink' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
              <i class='fas fa-user fa-fw'></i>" . $_SESSION['u'] . "</a>";
          echo "<div class='dropdown-menu dropdown-menu-right' aria-labelledby='navbarDropdownMenuLink'>";
          echo "<a class='dropdown-item' href='../backend/cerrar_sesion.php'>Cerrar sesión</a>";
          echo "</div>";
        }

        ?>
      </li>
    </ul>
  </nav>

  <div class="contenedorInferior">
    <div id="main" class="container-fluid p-5">
      <div class="row">
        <div class="col-9">
          <!-- /.card-header -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Empleado</h3>
            </div>
            <div class="card-body">
              <table id="inventario-table" class="table table-bordered table-hover">
                <tr>
                  <td>ID Empleado</td>
                  <td>Nombre</td>
                  <td>Apellido</td>
                  <td>Correo</td>
                  <td>Usuario</td>
                  <td>Id_Departamento</td>
                </tr>
                <?php
                include '../backend/conexion.php';
                $sql = "select ID_empleado, Nombre_empleado, Apellido_empleado,
                Correo, Usuario, ID_departamento from empleados";
                $result = mysqli_query($conexion, $sql);
                while ($mostrar = mysqli_fetch_array($result)) {
                ?>
                  <tr>
                    <td><?php echo $mostrar['ID_empleado'] ?></td>
                    <td><?php echo $mostrar['Nombre_empleado'] ?></td>
                    <td><?php echo $mostrar['Apellido_empleado'] ?></td>
                    <td><?php echo $mostrar['Correo'] ?></td>
                    <td><?php echo $mostrar['Usuario'] ?></td>
                    <td><?php echo $mostrar['ID_departamento'] ?></td>
                  </tr>
                <?php
                }
                ?>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <div class="col d-flex flex-column p-5">

          <button class="btn mb-5 button-" data-toggle="modal" data-target="#modal-modificar" onclick="location.reload()">Refrescar</button>

        </div>
      </div>
      <br>
      <h1>Añadir</h1>
      <?php

      if (isset($_POST['anadir'])) {
        $id_empleado = $_POST['id_empleado'];
        $nombre_empleado = $_POST['nombre'];
        $apellido_empleado = $_POST['apellido'];
        $correo = $_POST['correo'];
        $usuario = $_POST['usuario'];
        $id_departamento = $_POST['id_departamento'];
        $password = $_POST['password'];

        if (anadirempleados($id_empleado, $nombre_empleado, $apellido_empleado, $correo, $usuario, $id_departamento, $password, $conexion)) {
          header("Location: URL");
        }
      }

      if (isset($_POST['modif'])) {
        $id_empleado = $_POST['id_empleado'];
        $nombre_empleado = $_POST['nombre'];
        $apellido_empleado = $_POST['apellido'];
        $correo = $_POST['correo'];
        $usuario = $_POST['usuario'];
        $id_departamento = $_POST['id_departamento'];
        $password = $_POST['password'];

        if (modificarempleados($id_empleado, $nombre_empleado, $apellido_empleado, $correo, $usuario, $id_departamento, $password, $conexion)) {
          header("Location: URL");
        }
      }

      if (isset($_POST['eliminar'])) {
        $id_empleado = $_POST['id_empleado'];

        if (eliminarempleados($id_empleado, $conexion)) {
          header("Location: URL");
        }
      }


      ?>

      <form method="post">
        <input type="number" name="id_empleado" placeholder="ID Empleado" required>
        <input type="text" name="nombre" placeholder="Nombre" required>
        <input type="text" name="apellido" placeholder="Apellido" required>
        <input type="text" name="correo" placeholder="Correo" required>
        <input type="text" name="usuario" placeholder="Usuario" required>
        <input type="number" name="id_departamento" placeholder="ID Departamento" required>
        <input type="password" name="password" placeholder="Contraseña" required>
        <button name="anadir" type="submit">Registrar</button>
      </form>

      <h1>Modificar empleados</h1>
      <form method="post">
        <input type="number" name="id_empleado" placeholder="ID Empleado" required>
        <input type="text" name="nombre" placeholder="Nombre" required>
        <input type="text" name="apellido" placeholder="Apellido" required>
        <input type="text" name="correo" placeholder="Correo" required>
        <input type="text" name="usuario" placeholder="Usuario" required>
        <input type="number" name="id_departamento" placeholder="ID Departamento" required>
        <input type="password" name="password" placeholder="Contraseña" required>
        <button name="modif" type="submit">Modificar</button>
      </form>

      <h1>Eliminar empleados</h1>
      <form method="post">
        <input type="number" name="id_empleado" placeholder="ID Empleado" required>
        <button name="eliminar" type="submit">Eliminar</button>
      </form>

    </div>
  </div>



  <!-- Scripts for bootstrap -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
<script>
  $(document).ready(function() {
    $('#inventario-table').DataTable({
      "lengthMenu": [
        [10, 25, 50, -1],
        [10, 25, 50, "All"]
      ]
    });
  });
</script>
<script src="../js/sidebar.js"></script>

</html>
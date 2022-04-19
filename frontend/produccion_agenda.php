<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Producción - Agenda</title>

  <!-- stylesheets and bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
  <link rel="stylesheet" href="../css/indexStyle.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../css/sidebar.css">

  <!-- fullcalendar -->
  <link href='https://fullcalendar.io/releases/fullcalendar/3.9.0/fullcalendar.min.css' rel='stylesheet' />
  <link href='https://fullcalendar.io/releases/fullcalendar/3.9.0/fullcalendar.print.min.css' rel='stylesheet' media='print' />
  <script src='https://fullcalendar.io/releases/fullcalendar/3.9.0/lib/moment.min.js'></script>
  <script src='https://fullcalendar.io/releases/fullcalendar/3.9.0/lib/jquery.min.js'></script>
  <script src='https://fullcalendar.io/releases/fullcalendar/3.9.0/fullcalendar.min.js'></script>
  <script>
    $(document).ready(function() {
      $('#calendar').fullCalendar({
        header: {
          left: 'prev,next today',
          center: 'title',
          right: 'month,basicWeek,basicDay'
        },
        defaultDate: new Date(),
        navLinks: true, // can click day/week names to navigate views
        editable: true,
        eventLimit: true, // allow "more" link when too many events
        dayClick: function(date, jsEvent, view) {
          $("#successModal").modal("show");
          $("#eventDate").val(date.format());
        },
        // events: <?php echo json_encode($myArray); ?>

      });
    });
  </script>

  <!-- <link href='../lib/main.css' rel='stylesheet' />
    <script src='../lib/main.js'></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
          initialView: 'dayGridMonth'
        });
        calendar.render();
        });
    </script> -->
</head>

<body class="control-sidebar-slide-open sidebar-collapse sidebar-closed">
  <div id="mySidebar" class="sidebar">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <h1 style="color: white; font-size: 30px;">Producción</h1>
    <a href="../frontend/produccion_index.html">Volver</a>
    <a href="../frontend/produccion_inventario.html">Inventario</a>
    <a href="../frontend/produccion_agenda.html">Peticiones</a>
    <a href="../frontend/index.php">Inicio</a>

  </div>
  <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark mb-0">
    <!-- Sidebar Toggle-->
    <button class="openbtn" onclick="openNav()">&#9776;</button>
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="produccion_index.html">Producción</a>
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
  <div id="main">
    <div class="container">
      <div id="calendar"></div>
    </div>
    <div class="modal fade" id="successModal" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Modal Header</h4>
          </div>
          <div class="modal-body">
            <form action="test.php" method="post">
              <div class="form-group">
                <label for="eventtitle">Nombre cliente:</label>
                <input type="eventTitle" name="eventTitle" class="form-control" id="eventTitle" required="">
                <label for="Telefono">Telefono:</label>
                <input type="number" name="Telefono" class="form-control" id="Telefono" require="">
                <label for="Descripcion">Descripcion:</label>
                <input type="text" name="Descripcion" class="form-control" id="Descripcion" require="">
                <input type="hidden" name="eventDate" class="form-control" id="eventDate">

              </div>
              <button type="submit" value="submit" name="submit" class="btn btn-default">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>



  <!-- Scripts for bootstrap -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  <script src="../js/sidebar.js"></script>
</body>

</html>
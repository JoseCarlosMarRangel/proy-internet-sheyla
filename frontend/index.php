<?php

require '../backend/abrir_session.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Index</title>

    <!-- stylesheets and bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="../css/indexStyle.css">
    <link rel="stylesheet" href="../css/administración.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/sidebar.css">

</head>

<body class="sb-nav-fixed">



    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark mb-0">
        <!-- Sidebar Toggle-->
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="#">Index</a>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <!--<input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />-->
                <!--<button class = "btnEntrar" class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>-->
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
    <div class="contenedorMedio">
        <br><br><br>
        <h1>BIENVENIDO @USER</h1>
        <p>Departamento</p>
    </div>
    <div class="container-fluid main p-5">
        <div class="d-flex justify-content-around">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div id="Carousel" class="carousel slide">
                            <ol class="carousel-indicators">
                                <li data-target="#Carousel" data-slide-to="0" class="active"></li>
                                <li data-target="#Carousel" data-slide-to="1"></li>

                            </ol>
                            <br><br>

                            <!-- Carousel items -->
                            <div class="carousel-inner">

                                <div class="item active">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="departamentos">
                                                <div class="departamentoImagen">
                                                    <img src="../img/Administration-Section-img.jpg.jpg" alt="" width="100%" height="100%">
                                                </div>
                                                <h1>Administración</h1>
                                                <center>
                                                    <a href="../frontend/administracion_index.php"><button class="btn button-">Entrar</button></a>
                                                </center>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="departamentos">
                                                <div class="departamentoImagen">
                                                    <img src="../img/Comercial-Section-img.jpg.jpg" alt="" width="100%" height="100%">
                                                </div>
                                                <h1>Comercial</h1>
                                                <center>
                                                    <a href="../frontend/comercial_index.php"><button class="btn button-">Entrar</button></a>
                                                </center>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="departamentos">
                                                <div class="departamentoImagen">
                                                    <img src="../img/GeneralManagement-Section-img.jpg.jpg" alt="" width="100%" height="100%">
                                                </div>
                                                <h1>Dirección General</h1>
                                                <center>
                                                    <a href="../frontend/direccion_index.php"><button class="btn button-">Entrar</button></a>
                                                </center>
                                            </div>
                                        </div>
                                    </div>
                                    <!--.row-->
                                </div>
                                <!--.item-->



                                <div class="item">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="departamentos">
                                                <div class="departamentoImagen">
                                                    <img src="../img/Legal-Section-img.jpg.jpg" alt="" width="100%" height="100%">
                                                </div>
                                                <h1>Legal</h1>
                                                <center>
                                                    <a href="../frontend/legal_index.php"><button class="btn button-">Entrar</button></a>
                                                </center>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                              <div class="departamentos">
                                                <div class="departamentoImagen">
                                                    <img src="../img/Production-Section-img.jpg.jpg" alt="" width="100%" height="100%">
                                                </div>
                                                <h1>Producción</h1>
                                                <center>
                                                    <a href="../frontend/produccion_index.php"><button class="btn button-">Entrar</button></a>
                                                </center>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="departamentos">
                                                <div class="departamentoImagen">
                                                    <img src="../img/RH-section-img.jpg.jpg" alt="" width="100%" height="100%">
                                                </div>
                                                <h1>Recursos Humanos</h1>
                                                <center>
                                                    <a href="../frontend/rrhh_index.php"><button class="btn button-">Entrar</button></a>
                                                </center>
                                            </div>
                                        </div>
                                    </div>
                                    <!--.row-->
                                </div>
                                <!--.item-->


                            </div>
                            <!--.carousel-inner-->
                            <a data-slide="prev" href="#Carousel" class="botonIzquierdo">‹</a>
                            <a data-slide="next" href="#Carousel" class="botonDerecho">›</a>
                            <br>
                        </div>
                        <!--.Carousel-->


                    </div>
                </div>
            </div>
            <!--.container-->
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
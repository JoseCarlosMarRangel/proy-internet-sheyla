<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Index</title>

    <!-- stylesheets and bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/indexStyle.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous">
    </script>

</head>

<body class="sb-nav-fixed">

    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark mb-0">
        <!-- Navbar Brand-->
        <!--<a class="navbar-brand ps-3" href="#">Producción</a>-->
        <!-- Sidebar Toggle-->

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
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false"><i class="fas fa-user fa-fw"></i>Usuario</a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Cerrar sesión</a></li>
                </ul>
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
                                <li data-target="#Carousel" data-slide-to="2"></li>
                            </ol>
                            <br><br>

                            <!-- Carousel items -->
                            <div class="carousel-inner">

                                <div class="item active">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="departamentos">
                                                <div class="departamentoImagen">
                                                    <br>
                                                    <center>*Imagen*</center>
                                                </div>
                                                <h1>Departamento</h1>
                                                <center>
                                                    <button>Entrar</button>
                                                </center>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="departamentos">
                                                <div class="departamentoImagen">
                                                    <br>
                                                    <center>*Imagen*</center>
                                                </div>
                                                <h1>Departamento</h1>
                                                <center>
                                                    <button>Entrar</button>
                                                </center>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="departamentos">
                                                <div class="departamentoImagen">
                                                    <br>
                                                    <center>*Imagen*</center>
                                                </div>
                                                <h1>Departamento</h1>
                                                <center>
                                                    <button>Entrar</button>
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
                                                    <br>
                                                    <center>*Imagen*</center>
                                                </div>
                                                <h1>Departamento</h1>
                                                <center>
                                                    <button>Entrar</button>
                                                </center>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="departamentos">
                                                <div class="departamentoImagen">
                                                    <br>
                                                    <center>*Imagen*</center>
                                                </div>
                                                <h1>Departamento</h1>
                                                <center>
                                                    <button>Entrar</button>
                                                </center>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="departamentos">
                                                <div class="departamentoImagen">
                                                    <br>
                                                    <center>*Imagen*</center>
                                                </div>
                                                <h1>Departamento</h1>
                                                <center>
                                                    <button>Entrar</button>
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
                                                    <br>
                                                    <center>*Imagen*</center>
                                                </div>
                                                <h1>Departamento</h1>
                                                <center>
                                                    <button>Entrar</button>
                                                </center>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="departamentos">
                                                <div class="departamentoImagen">
                                                    <br>
                                                    <center>*Imagen*</center>
                                                </div>
                                                <h1>Departamento</h1>
                                                <center>
                                                    <button>Entrar</button>
                                                </center>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="departamentos">
                                                <div class="departamentoImagen">
                                                    <br>
                                                    <center>*Imagen*</center>
                                                </div>
                                                <h1>Departamento</h1>
                                                <center>
                                                    <button>Entrar</button>
                                                </center>
                                            </div>
                                        </div>
                                    </div>
                                    <!--.row-->
                                </div>
                                <!--.item-->

                            </div>
                            <!--.carousel-inner-->
                            <a data-slide="prev" href="#Carousel" class="left carousel-control">‹</a>
                            <a data-slide="next" href="#Carousel" class="right carousel-control">›</a>
                        </div>
                        <!--.Carousel-->

                    </div>
                </div>
            </div>
            <!--.container-->
        </div>
        <br>
    </div>

    <!-- Scripts for bootstrap -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
</body>

</html>
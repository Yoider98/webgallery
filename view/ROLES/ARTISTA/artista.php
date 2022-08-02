<?php
session_start();
if (!isset($_SESSION['Rol'])) {
    header("Location: ../../login.php");
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Gallery</title>
    <link rel="shortcut icon" href="#">
    <link rel="stylesheet" href="../../css/bootstrap-reboot.css">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/Estilo.css">
    <link rel="stylesheet" href="../../css/EstiloObras.css">
    <link rel="stylesheet" href="../../css/style.css">
</head>

<body>
    <!-- <nav class="navbar navbar-light bg-white navbar-expand-md border rounded-0">
        <div class="container">
            <a href="#" class="navbar-brand"><img src="../../img/logoImg.jpg" alt="Logo pagina" width="100" height="auto" /></a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#menu-principal" aria-controls="menu-principal" aria-expanded="false" aria-label="Desplegar menu de navegacion">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menu-principal">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="#" class="nav-link active">Inicio</a>
                    </li>
                    <li class="nav-item"><a type="button" class="nav-link" data-toggle="modal" data-target="#modalRegistroObras">Registrar Obra</a></li>
                    <li class="nav-item">
                        <a href="#" class="nav-link  mt-2 py-0"><?php

                                                                echo $_SESSION['NOMBRE_USUARIO'];
                                                                ?></a>
                    </li>
                    <li class="nav-item">
                        <a href="../../cerrar_sesion.php" class="btn btn-primary btn-block" type="submit">Cerrar sesion</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav> -->
    <header style="background-color: #ece8b0;" class="container">
        <div class="menus">
            <nav class="navbar navbar-expand-lg navbar-light">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div>
                    <img class="nombre" src="../../img/logo.png">
                </div>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <div class="menu">
                        <ul class="navbar-nav ">
                            <li class="nav-item active">
                                <a class="nav-link boton" href="indexArtista.php">&nbsp&nbsp&nbsp&nbspInicio&nbsp&nbsp&nbsp&nbsp&nbsp</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link boton " href="#C">&nbspContactanos&nbsp</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link boton " href="#C">&nbspMis obras&nbsp</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link boton " data-toggle="modal" data-target="#modalRegistroObras" href="#C">&nbspRegistrar Obras&nbsp</a>
                            </li>
                            <li class="nav-item">
                        <a href="#" class="nav-link  mt-2 py-0"><?php

                                                                echo $_SESSION['NOMBRE_USUARIO'];
                                                                ?></a>
                    </li>
                    <li class="nav-item">
                        <a href="../../cerrar_sesion.php" class="nav-link boton " type="submit">Cerrar sesion</a>
                    </li>
                        </ul>

                    </div>

                </div>
            </nav>
        </div>
    </header>

    <section class="Obras mt-5">
        <div class="container">
            <h1 class="text-center">Obras</h1>
            <div class="row" id="space-list">

            </div>
        </div>

    </section>

    <!-- Modal registro Obra-->
    <div class="modal fade" id="modalRegistroObras" tabindex="-1" role="dialog" aria-labelledby="modalInstruccionesCenterTitle" aria-hidden="true" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalRegistroObrasLongTitle">Registrar Obra</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="form-signin" method="post" action="../../../controller/action/act_registroObra.php" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="text" name="nombreObra" class="form-control" placeholder="Nombre de la obra" required />
                        </div>
                        <div class="form-group">
                            <input type="file" name="imagen" class="form-control" placeholder="abjuntar imagen" required />
                        </div>
                        <div class="form-group">
                            <input type="text" name="descripcion" class="form-control" placeholder="Descripcion" required />
                        </div>
                        <button class="btn btn-primary btn-block" type="submit">Registrar Obra</button>
                    </form>
                </div>

            </div>
        </div>

    </div>

    <!-- Modal Editar Obra-->
    <div class="modal fade" id="modalEditarObra" tabindex="-1" role="dialog" aria-labelledby="modalInstruccionesCenterTitle" aria-hidden="true" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalEditarObraLongTitle">Registrar Tabata</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="form-signin" method="post" action="../../../controller/action/act_editarObra.php" enctype="multipart/form-data">
                    <div class="form-group">
                            <input type="text" name="id" style="display: none" class="form-control"/>                            
                        </div>    
                    <div class="form-group">
                            <input type="text" name="nombreObra" class="form-control" placeholder="Nombre de la obra" required />
                        </div>
                        <div class="form-group">
                            <input type="file" name="imagen" class="form-control" placeholder="abjuntar imagen" required />
                        </div>
                        <div class="form-group">
                            <input type="text" name="descripcion" class="form-control" placeholder="Descripcion" required />
                        </div>
                        <button class="btn btn-primary btn-block" type="submit">Editar Obra</button>
                    </form>
                </div>

            </div>
        </div>

    </div>

    <script src="../../js/jquery-3.6.0.min.js"></script>
    <script src="../../js/popper.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/verObrasArtista.js"></script>


</body>

</html>
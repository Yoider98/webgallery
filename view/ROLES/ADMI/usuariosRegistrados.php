<?php
session_start();
if (!isset($_SESSION['Rol'])) {
    header("Location: ../../login.php");
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    
    <link rel="stylesheet" href="../../css/style.css">
    <script src="js/head.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>
        
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WEBGALERY</title>
</head>

<body>
    <div class="contenido">
        <header style="background-color: #ece8b0;" class="container">
            <div class="menus">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                        data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div>
                        <img class="nombre" src="../../img/logo.png">
                    </div>

                    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                        <div class="menu">
                            <ul class="navbar-nav ">
                                <li class="nav-item active">
                                    <a class="nav-link boton"
                                        href="admi.php">&nbsp&nbsp&nbsp&nbspInicio&nbsp&nbsp&nbsp&nbsp&nbsp</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link boton " href="#C">&nbspContactanos&nbsp</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link boton " href="">&nbspHistorial de ventas&nbsp</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link boton " href="">&nbspUsuarios registrados&nbsp</a>
                                </li>
                            </ul>

                        </div>

                    </div>
                    <div>
                        <a href="carrito.php"><img style="width: 120%; margin-left: -509%; margin-top: 90%;"
                                src="../../img/carrito.ico"></a>
                    </div>
                    <div>
                        <a href="../../cerrar_sesion.php"><img style="width: 120%; margin-left: -440%; margin-top: 90%;"
                                src="../../img/sesion.ico"></a>
                    </div>
                </nav>

            </div>
        </header>
        <section class="Obras mt-5">
        <div class="main.container">
        <t<table class="mt10">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Rol</th>
                        <th>Correo</th>
                       
                    </tr>
                </thead>

                <tbody>
                
                </tbody>
                </table>
        </div>

    </section>
        <section class="final" id="C">
            <div class="container2">
                <div class="row">
                    <div class="col-sm-8">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3913.4829201851608!2d-74.18905068570976!3d11.225842253808162!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8ef4f5a5b24fb07f%3A0xb2cb35bcc3e481ad!2sUniversidad%20del%20Magdalena!5e0!3m2!1ses!2sco!4v1639531590875!5m2!1ses!2sco"
                            width="100%" height="320" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>

                    <div class="col-sm-4" id="contact2">
                        <h3>WebGallery</h3>
                        <hr align="left" width="50%">
                        <i class="fas fa-globe" style="color:#000"></i> Calle 32 ##22-08, Santa Marta, Magdalena<br>
                        <h4 class="pt-2">Llamanos o escribenos</h4>
                        <i class="fas fa-phone" style="color:#000"></i> <a href="tel:+57"> 000 000 0000 </a><br>
                        <i class="fab fa-whatsapp" style="color:#000"></i><a href="tel:+57"> 000 000 0000 </a><br>
                        <h4 class="pt-2">Email</h4>
                        <i class="fa fa-envelope" style="color:#000"></i> <a href="">WebGallery@gmail.com</a><br>
                    </div>
                </div>
            </div>

        </section>
        <footer style="background-color: #f0e985;">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-info-single">
                            <img src="../../img/logo.png" class="img-responsive center-block" alt="logotipo"
                                style="width: 70%; height: 70%;">
                        </div>
                    </div>


                    <div class="col-md-3 col-sm-1">
                        <div class="footer-info-single">
                            <h2 class="title">Redes sociales</h2>
                            <ul class="list-unstyled">
                                <li><a href=""> <img src="../../img/Facebook.png" alt="Facebook" class="red"></a> </li>
                                <li><a href=""> <img src="../../img/Instagram.png" alt="Instagram" class="red"></a></li>
                                <li><a href=""> <img src="../../img/whatsapp.png" alt="Whatsapp" class="red"></a></li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>

            <section class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-19s">
                            <p>Copyright © 2021 | WebGallery. Todos los derechos reservados</p>
                        </div>
                        <div class="col-sm-6"></div>
                    </div>
                </div>
            </section>
        </footer>
    </div>
    <script src="../../js/jquery-3.6.0.min.js"></script>
    <script src="../../js/verObras.js"></script>
</body>

</html>
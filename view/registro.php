<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Registro</title>
  <link rel="stylesheet" href="css/bootstrap-reboot.css" />
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/estiloLogin.css" />
</head>

<body class="bg-white">
  <div class="container">
    <div class="row justify-content-center m-5">
      <div class="col-12">
        <div class="row ">
          <div class="col-6 d-none d-lg-block mt-5 pt-5 ">
            <img src="img/registroimg.jpg" alt="imagen-registro" class="img-fluid rounded-circle  p-5" />
          </div>
          <div class="col-12 col-lg-6">
            <div class="row">
              <div class="col-12">
                <h1 class="text-center my-4">Crear Un Usuario Nuevo</h1>
                <form class="form-signin" method="post" action="../controller/action/act_registro.php" class="p-3">
                  <div class="form-group">
                    <input name="nombre" type="text" class="form-control" placeholder="Nombre" required />
                  </div>
                  <div class="form-group">
                    <input name="correo" type="email" class="form-control" id="email" placeholder="Ingrese Correo Electronico" required />
                  </div>
                  <div class="form-row mb-3">
                    <div class="col ">

                      <select class="form-control" name="rol">
                        <option selected>Selecciona</option>
                        <option>Artista</option>
                        <option>Usuario</option>
                      </select>

                    </div>

                  </div>
                  <div class="form-group">

                    <input name="contrasena" type="password" class="form-control" placeholder="Contraseña" required />
                  </div>

                  <button class="btn btn-primary btn-block" type="submit">Registrarse</button>
                  <hr />
                  <a href="#" class="btn btn-google btn-block">
                    <span class="fab fa-google"></span>
                    Registrarse Con Google
                  </a>
                  <a href="#" class="btn btn-facebook btn-block">
                    <span class="fab fa-facebook-f"></span>
                    Registrarse Con Facebook
                  </a>
                </form>
                <hr />
                <div class="text-center">
                  <a href="" class="small">Recuperar Contraseña</a>
                </div>
                <div class="text-center">
                  <a href="login.php" class="small">Cuenta con un usuario! Inicia sesión</a>
                </div>
              </div>
              <div class="col-12"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="js/jquery-3.6.0.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>

</html>
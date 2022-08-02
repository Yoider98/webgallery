<?php

session_start();

require_once(__DIR__ . "/../mdb/mdbUsuario.php");

$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

$usuario = autenticarUsuario($correo, $contrasena);


if ($usuario != null) {
    $_SESSION['ID_USUARIO'] = $usuario->getIdUsuario();
    $_SESSION['NOMBRE_USUARIO'] = $usuario->getNombre();
    $_SESSION['Rol'] = $usuario->getRol();

    if ($usuario->rol == 'administrador') {
        header("Location: ../../view/ROLES/ADMI/admi.php");
    }
    if ($usuario->rol == 'artista') {
        header("Location: ../../view/ROLES/ARTISTA/artista.php");
    }
    if ($usuario->rol == 'usuario') {
        header("Location: ../../view/ROLES/USUARIO/usuario.php");
    }
} else {
    header("Location: ../../view/login.php?msg=Datos incorrectos");
}

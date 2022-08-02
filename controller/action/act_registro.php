<?php
session_start();


require_once(__DIR__ . "/../mdb/mdbUsuario.php");

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$variable = $_POST['rol'];
$rol = strtolower($variable);
$contrasena = $_POST['contrasena'];


$usuario = new Usuario(null, $nombre, $correo, $rol, $contrasena);
$registrar = registrarUsuario($usuario);

if ($registrar == 0) {
    header("Location: ../../view/login.php?msg=Error registro");
} else {
    header("Location: ../../view/login.php?msg=Registrado Correctamente");
}

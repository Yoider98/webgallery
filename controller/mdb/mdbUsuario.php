<?php
require_once(__DIR__ . "/../../model/dao/usuarioDao.php");

function autenticarUsuario($correo, $contrasena)
{
    $dao = new usuarioDao();
    $usuario = $dao->autenticarUsuario($correo, $contrasena);

    return $usuario;
}
function registrarUsuario(usuario $usuario)
{
    $dao = new usuarioDao();

    $usuario = $dao->registrarUsuario($usuario);

    return $usuario;
}

function verUsuarios()
{
    $dao = new usuarioDao();
    $usuario = $dao->verUsuarios();
    return $usuario;
}
function eliminarUsuario($usuario)
{
    $dao = new usuarioDao();
    $dao->eliminarUsuario($usuario);
}
function verUsuarioPorId($idUsuario)
{
    $dao = new usuarioDao();
    $usuario = $dao->verUsuarioPorId($idUsuario);
    return $usuario;
}
function editarUsuario($usuario)
{
    $dao = new usuarioDao();
    $dao->editarUsuario($usuario);
}

<?php

class usuario
{
    public $idUsuario;
    public $nombre;
    public $correo;
    public $rol;
    public $contrasena;

    function __construct($idUsuario, $nombre, $correo, $rol, $contrasena)
    {
        $this->idUsuario = $idUsuario;
        $this->nombre = $nombre;
        $this->correo = $correo;
        $this->rol = $rol;
        $this->contrasena = $contrasena;
    }
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }
    public function getNombre()
    {
        return $this->nombre;
    }
    public function getCorreo()
    {
        return $this->correo;
    }
    public function getRol()
    {
        return $this->rol;
    }
    public function getContrasena()
    {
        return $this->contrasena;
    }
    public function setIdUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;
        return $this;
    }
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }
    public function setCorreo($correo)
    {
        $this->correo = $correo;
        return $this;
    }
    public function setRol($rol)
    {
        $this->rol = $rol;
        return $this;
    }
    public function setContrasena($contrasena)
    {
        $this->contrasena = $contrasena;
        return $this;
    }
}

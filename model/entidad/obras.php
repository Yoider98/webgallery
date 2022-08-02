<?php

class obras
{
    public $id;
    public $idArtista;
    public $nombreObra;
    public $imagen;
    public $descripcion;

    function __construct($id, $idArtista, $nombreObra, $imagen, $descripcion)
    {
        $this->id = $id;
        $this->idArtista = $idArtista;
        $this->nombreObra = $nombreObra;
        $this->imagen = $imagen;
        $this->descripcion = $descripcion;
    }

    public function getid()
    {
        return $this->id;
    }
    public function getIdArtista()
    {
        return $this->idArtista;
    }
    public function getNombreObra()
    {
        return $this->nombreObra;
    }
    public function getImagen()
    {
        return $this->imagen;
    }
    public function getDescripcion()
    {
        return $this->descripcion;
    }
    public function setid($id)
    {
        $this->id = $id;
        return $this;
    }
    public function setIdArtista($idArtista)
    {
        $this->idArtista = $idArtista;
        return $this;
    }
    public function setNombreObra($nombreObra)
    {
        $this->nombreObra = $nombreObra;
        return $this;
    }
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;
        return $this;
    }
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
        return $this;
    }
}

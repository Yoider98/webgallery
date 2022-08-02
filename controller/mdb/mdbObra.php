<?php
require_once(__DIR__ . "/../../model/dao/obrasDao.php");
function registraObra(obras $obras)
{
    $dao = new obrasDao();

    $obra = $dao->registrarObras($obras);
    return $obra;
}

function verObra()
{
    $dao = new obrasDao();
    $obra = $dao->verObra();
    return $obra;
}

function eliminarObra($id)
{
    $dao = new obrasDao();
    $dao->eliminarObra($id);
}

function verObraIdArtista($idArtista)
{
    $dao = new obrasDao();
    $obra = $dao->verObraIdArtista($idArtista);
    return $obra;
}
function verObraIdObra($idobra)
{
    $dao = new obrasDao();
    $obra = $dao->verObraIdObra($idobra);
    return $obra;
}
function editarObras(obras $obra)
{
    $dao = new obrasDao();
    $dao->editarObras($obra);
}

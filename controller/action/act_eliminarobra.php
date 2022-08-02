<?php
    session_start();
    require_once(__DIR__."/../mdb/mdbObra.php");
    $resultado=eliminarObra($_GET['id']);
    if($resultado==0){
        header("Location: ../../view/ROLES/ARTISTA/artista.php");
    }
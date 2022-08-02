<?php
    session_start();
    require_once (__DIR__.'/../mdb/mdbObra.php');
    $idUsuario = $_SESSION['ID_USUARIO'];
    $obras = verObraIdArtista($idUsuario);
    echo json_encode($obras); 
     
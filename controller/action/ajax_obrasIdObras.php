<?php
    session_start();
    require_once (__DIR__.'/../mdb/mdbObra.php');
    $idObra = $_POST['id'];
    $obras = verObraIdObra($idObra);
    echo json_encode($obras);
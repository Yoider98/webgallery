<?php
session_start();
require_once(__DIR__ . "/../mdb/mdbObra.php");

$idArtista =  $_SESSION['ID_USUARIO'];
$nombreObra = $_POST['nombreObra'];
$descripcion = $_POST['descripcion'];

if (isset($_FILES['imagen'])) {
    $imagen = date("YmdHis") . ".jpg";
    $obra = new obras(NULL, $idArtista, $nombreObra, $imagen, $descripcion);
    $resultado = registraObra($obra);
    if ($resultado) {
        if (move_uploaded_file($_FILES['imagen']['tmp_name'], $_SERVER['DOCUMENT_ROOT']."/xampp/webgallery/assets/" . $imagen)) {
            header("Location: ../../view/ROLES/ARTISTA/artista.php");
        } else {
            echo "no funciono";
        }
    } else {
         echo "barro no guardo";
    }
} else {
    echo "Falta abjuntar imagen";
}


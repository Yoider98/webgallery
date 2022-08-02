<?php
session_start();
require_once(__DIR__ . "/../mdb/mdbObra.php");
$id=$_POST['id'];
$idArtista =  $_SESSION['ID_USUARIO'];
$nombreObra = $_POST['nombreObra'];
$descripcion = $_POST['descripcion'];
echo $id;
/*if (isset($_FILES['imagen'])) {
    $imagen = date("YmdHis") . ".jpg";
    $obra = new obras($id, $idArtista, $nombreObra, $imagen, $descripcion);
    $resultado = editarObras($obra);
    if ($resultado) {
        if (move_uploaded_file($_FILES['imagen']['tmp_name'], $_SERVER['DOCUMENT_ROOT']."/xampp/webgallery/assets/" . $imagen)) {
            header("Location: ../../view/ROLES/ARTISTA/artista.php");
        } else {
            echo "no funciono";
        }
    } else {
         echo "no edito";
    }
} else {
    echo "Falta abjuntar imagen";
}*/
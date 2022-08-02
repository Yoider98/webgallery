<?php
require_once("dataSource.php");
require_once(__DIR__ . "/../entidad/obras.php");

class obrasDao
{
    public function registrarObras(obras $obras)
    {
        $data_source = new DataSource();
        $stmt1 = "INSERT INTO obras VALUES (NULL,:idArtista,:nombreObra,:imagen,:descripcion)";
        $resultado = $data_source->ejecutarActualizacion($stmt1, array(
            ':idArtista' => $obras->getIdArtista(),
            ':nombreObra' => $obras->getNombreObra(),
            ':imagen' => $obras->getImagen(),
            ':descripcion' => $obras->getDescripcion()
        ));
        return $resultado;
    }
    public function verObra()
    {
        $data_source = new DataSource();
        $data_table = $data_source->ejecutarConsulta("SELECT * FROM obras", NULL);
        $obras = null;
        $obra = array();

        foreach ($data_table as $indice => $valor) {
            $obras = new obras(
                $data_table[$indice]["id"],
                $data_table[$indice]["idArtista"],
                $data_table[$indice]["nombreObra"],
                $data_table[$indice]["imagen"],
                $data_table[$indice]["descripcion"]
            );
            array_push($obra, $obras);
        }
        return $obra;
    }

    public function eliminarObra($id)
    {
        $data_source = new DataSource();
        $stmt1 = "DELETE FROM obras WHERE id=:id";
        $resultado = $data_source->ejecutarActualizacion($stmt1, array(
            ':id' => $id
        ));
        return $resultado;
    }

    public function verObraIdArtista($idUsuario)
    {
        $data_source = new DataSource();
        $data_table = $data_source->ejecutarConsulta("SELECT * FROM obras WHERE idArtista= $idUsuario", NULL);
        $obras = null;
        $obra = array();

        foreach ($data_table as $indice => $valor) {
            $obras = new obras(
                $data_table[$indice]["id"],
                $data_table[$indice]["idArtista"],
                $data_table[$indice]["nombreObra"],
                $data_table[$indice]["imagen"],
                $data_table[$indice]["descripcion"]
            );
            array_push($obra, $obras);
        }
        return $obra;
    }
    public function verObraIdObra($idobra)
    {
        $data_source = new DataSource();
        $data_table = $data_source->ejecutarConsulta("SELECT * FROM obras WHERE id= $idobra", NULL);
        $obras = null;
        $obra = array();

        foreach ($data_table as $indice => $valor) {
            $obras = new obras(
                $data_table[$indice]["id"],
                $data_table[$indice]["idArtista"],
                $data_table[$indice]["nombreObra"],
                $data_table[$indice]["imagen"],
                $data_table[$indice]["descripcion"]
            );
            array_push($obra, $obras);
        }
        return $obra;
    }
    public function editarObras(obras $obra)
    {
        $data_source = new DataSource();

        $stmt1 = "UPDATE obras SET nombreObra=:nombreObra, imagen=:imagen, descripcion=:descripcion WHERE id=:id";
        echo var_dump($obra);
        $resultado = $data_source->ejecutarActualizacion($stmt1, array(
            ':id' => $obra->getid(),
            ':nombreObra' => $obra->getNombreObra(),
            ':imagen' => $obra->getImagen(),
            ':descripcion' => $obra->getDescripcion()
        ));
        return $resultado;
    }
}

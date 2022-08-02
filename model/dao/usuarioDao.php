<?php
require_once("dataSource.php");
require_once(__DIR__ . "/../entidad/usuario.php");

class usuarioDao
{
    public function autenticarUsuario($correo, $contraseña)
    {
        $data_source = new DataSource();

        $data_table = $data_source->ejecutarConsulta("SELECT * FROM usuarios WHERE correo=:correo AND contrasena=:contrasena", array(':correo' => $correo, ':contrasena' => $contraseña));
        $usuario = null;
        if (count($data_table) == 1) {
            foreach ($data_table as $indice => $valor) {
                $usuario = new usuario(
                    $data_table[$indice]["idUsuario"],
                    $data_table[$indice]["nombre"],
                    $data_table[$indice]["correo"],
                    $data_table[$indice]["rol"],
                    $data_table[$indice]["contrasena"]
                );
            }
        }
        return $usuario;
    }

    public function registrarUsuario(usuario $usuario)
    {
        $data_source = new DataSource;
        $stmt1 = "INSERT INTO usuarios VALUES (NULL,:nombre,:correo,:rol,:contrasena)";

        $resultado = $data_source->ejecutarActualizacion($stmt1, array(
            ':nombre' => $usuario->getNombre(),
            ':correo' => $usuario->getCorreo(),
            ':rol' => $usuario->getRol(),
            ':contrasena' => $usuario->getContrasena()
        ));
        return $resultado;
    }

    public function verUsuarios()
    {
        $data_source = new DataSource();

        $data_table = $data_source->ejecutarConsulta("SELECT * FROM usuarios", NULL);

        $usuario = null;
        $usuarios = array();

        foreach ($data_table as $indice => $valor) {
            $usuario = new Usuario(
                $data_table[$indice]["idUsuario"],
                $data_table[$indice]["nombre"],
                $data_table[$indice]["correo"],
                $data_table[$indice]["rol"],
                $data_table[$indice]["contrasena"]
            );
            array_push($usuarios, $usuario);
        }

        return $usuarios;
    }

    public function eliminarUsuario($idUsuario)
    {
        $data_source = new DataSource();
        $stmt1 = "DELETE FROM usuario WHERE idUsuario= :idUsuario";

        $resultado = $data_source->ejecutarActualizacion($stmt1, array(
            'idUsuario' => $idUsuario
        ));
        return $resultado;
    }
    public function verUsuarioPorId($idUsuario)
    {
        $data_source = new DataSource();

        $data_table = $data_source->ejecutarConsulta("SELECT * FROM usuarios WHERE idUsuario= :idUsuario", array(':idUsuario' => $idUsuario));

        $usuario = null;
        if (count($data_table) == 1) {
            foreach ($data_table as $indice => $valor) {
                $usuario = new usuario(
                    $data_table[$indice]["idUsuario"],
                    $data_table[$indice]["nombre"],
                    $data_table[$indice]["correo"],
                    $data_table[$indice]["rol"],
                    $data_table[$indice]["contraseña"]
                );
            }
        }
        return $usuario;
    }

    public function editarUsuario($usuario)
    {
        $data_source = new DataSource();

        $stmt1 = "UPDATE usuarios SET nombre = :nombre, correo = :correo, rol= :rol, contraseña=:contraseña WHERE idUsuario = :idUsuario";
        $resultado = $data_source->ejecutarActualizacion($stmt1, array(
            ':nombre' => $usuario->getNombre(),
            ':correo' => $usuario->getCorreo(),
            ':rol' => $usuario->getRol(),
            ':contraseña' => $usuario->getContraseña()
        ));
        return $resultado;
    }
}

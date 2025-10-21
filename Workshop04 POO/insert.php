<?php
require_once "conexion.php";

class Usuario{
    private $conexion;

    public function __construct() {
        $db = new ConexionBD();
        $this->conexion = $db->getConnection();
    }

    public function insertarUsuario($nombre, $apellidos, $idProvincia) {
        $sql = "INSERT INTO usuarios (nombre, apellidos, idProvincia) 
                VALUES ('$nombre', '$apellidos', '$idProvincia')";
        if ($this->conexion->query($sql) === TRUE) {
            return true;
        } else {
            return "Error: " . $sql . "<br>" . $this->conexion->error;
        }
    }

    public function cerrarConexion() {
        $this->conexion->close();
    }
}

?>


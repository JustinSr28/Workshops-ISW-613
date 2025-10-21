<?php

require_once "conexion.php";

class Provincia {
    private $conexion;

    public static function cargarProvincias() {
        $db = new ConexionBD();
        $conexion = $db->getConnection();

        $sql = "SELECT idProvincia, provincia FROM provincias";
        $result = $conexion->query($sql); 

        $provincias = [];

        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $provincias[] = $row;
            }
        }

        $db->closeConnection(); 

        return $provincias;
    }
}
?>


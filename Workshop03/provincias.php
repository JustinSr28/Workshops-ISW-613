<?php
include "conexion.php";

$sql = "SELECT idProvincia, provincia FROM provincias";

$result = $conn->query($sql);

$provincias = [];

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $provincias[] = $row;
    }
}


return $provincias;
?>

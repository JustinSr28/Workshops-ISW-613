<?php
include "conexion.php";


$nombre     = $_POST['nombre'];
$apellidos  = $_POST['apellidos'];
$idProvincia = $_POST['idProvincia'];  



$sql = "INSERT INTO usuarios (nombre, apellidos, idProvincia) 
        VALUES ('$nombre', '$apellidos', '$idProvincia')";

if ($conn->query($sql) === TRUE) {
    header("Location: login.php?nombre=" . urlencode($nombre));
    exit(); 
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>


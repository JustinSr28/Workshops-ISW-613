<?php
require_once "insert.php";

$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$idProvincia = $_POST['idProvincia'];

$usuario = new Usuario();

$resultado = $usuario->insertarUsuario($nombre, $apellidos, $idProvincia);

if ($resultado === true) {
	echo "Usuario registrado exitosamente.";
} else {
	echo "Error al registrar el usuario: " . $resultado;
}
$usuario->cerrarConexion();



?>
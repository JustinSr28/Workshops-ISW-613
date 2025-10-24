<?php
include('../common/Users.php');

// edit user page
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: /index.php");
    exit();
}
$user_id = $_GET['Id']; //Puedo hacerlo por metodo post para mas seguridad, o tomar como referencia el username.

$users = new Users();
if ($users->deleteUser($user_id)) 
?>
<?php
include('../common/Users.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $lastName = $_POST['lastName'];
    
    $users = new Users();
    $inserted = $users->insertUser($name, $lastName, $username, $password);
}
?>

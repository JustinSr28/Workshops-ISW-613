<?php
include('../common/Users.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $users = new Users();
    $loginResult = $users->login($username, $password);
}
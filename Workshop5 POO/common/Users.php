<?php 
require_once "connection.php";

class Users {
    private $conn;

    public function __construct() {
        $bd = new ConnectionBD();
        $this->conn = $bd->getConnection();
    }

    public function login($username, $password) {
        $sql = "SELECT Id, password, status FROM users WHERE username = '$username'";
        $result = mysqli_query($this->conn, $sql);

        if ($result && mysqli_num_rows($result) == 1) {
            $user = mysqli_fetch_assoc($result);

            if (password_verify($password, $user['password'])) {
                if ($user['status'] == 'active') {
                    session_start();
                        $_SESSION['username'] = $username;
                        $_SESSION['user_id'] = $user['Id'];
                        $this->updateLastLogin($user['Id']);
                    Header("Location: ../pages/dashboard.php");
                } else {
                    echo "Inactive User";
                }
            } else {
                echo "Wrong password";
            }
        } else {
            echo "User not found"; //devuelve valores para feedback del usuario pero realmente no se implementa aun
        }
    }

    public function updateLastLogin($user_id) {
        date_default_timezone_set('America/Costa_Rica');
        $currentDate = date("Y-m-d H:i:s");
        $sql = "UPDATE users SET last_login_datetime = '$currentDate' WHERE Id = '$user_id'";
        mysqli_query($this->conn, $sql);
    }

    public function insertUser($name, $lastName, $username, $password) {
        $password_hashed = password_hash($password, PASSWORD_BCRYPT);
        date_default_timezone_set('America/Costa_Rica');
        $lastLogin = date("Y-m-d H:i:s");


        $sql = "INSERT INTO users (name, lastName, username, password, role, status, last_login_datetime)
                VALUES ('$name', '$lastName', '$username', '$password_hashed', 'user', 'active', '$lastLogin')";
          if (mysqli_query($this->conn, $sql)) {
            header("Location: ../index.php");
            exit();
          } else {
           return "Error: " . mysqli_error($this->conn);
          }
    }
        
    public function deleteUser($user_id) {
        $sql = "UPDATE users SET status = 'inactive' WHERE Id = '$user_id'";
        if (mysqli_query($this->conn, $sql)) {
            header("Location: ../pages/dashboard.php");
            exit();
          } else {
           return "Error: " . mysqli_error($this->conn);
          }
    }

    public function getAllUsers() {
        $sql = "SELECT Id, name, lastName, username, role, status, last_login_datetime FROM users";
        $result = mysqli_query($this->conn, $sql);

        $users = [];
        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $users[] = $row; // agregamos cada fila al array
            }
        }
        return $users; // retorna array vacío si no hay usuarios
    }
}
?>

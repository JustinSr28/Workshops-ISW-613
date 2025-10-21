<?php
class ConexionBD {
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $db   = "workshop03";
    private $conn;

    public function __construct() { //Se ejecuta al instanciar la clase
     $this->conectar(); 
    }

    private function conectar(){
        $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->db); //crea la conexión, pero es privada

        if ($this->conn->connect_error) {
            die("Error de conexión: " . $this->conn->connect_error);
        }
    }


    public function getConnection () {
        return $this->conn; //accede a la conexion, y es publica
    }


    public function closeConnection() {
        $this->conn->close(); //cierra la conexión
    }
}
?>
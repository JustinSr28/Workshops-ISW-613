<?php
class ConnectionBD {
   private $conn;
   private $user = "root";
   private $pass = "";
   private $host = "localhost";
   private $db = "workshop5";


        public function __construct(){
            $this->connect();
        }

        private function connect(){
            $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->db);
            if ($this->conn->connect_error) {
                die("Connection failed: " . $this->conn->connect_error);
            }
        }

        public function getConnection() {
            return $this->conn;
        }

        public function closeConnection() {
            $this->conn->close();
        }
}
?>
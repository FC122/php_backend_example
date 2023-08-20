<?php
class Database {
 
    // specify your own database credentials
    private $host = "localhost";
    private $db_name = "shop";
    private $username = "root";
    private $password = "";
    public $conn;
 
    // get the database connection
    public function getConnection() {
 
        $this->conn = null;
 
        try {
            // Create a new PDO instance and establish the database connection
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            
            // Set the character encoding to UTF-8
            $this->conn->exec("set names utf8");
        } catch(PDOException $exception) {
            // If an exception occurs, display the error message
            echo "Connection error: " . $exception->getMessage();
        }
 
        return $this->conn;
    }
}


?>
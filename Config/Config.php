<?php

$bdd = new PDO(
    	"mysql:host=" . getenv("bpcek3ew2gqv7rdmv8nj-mysql.services.clever-cloud.com") . ";dbname=" . getenv("bpcek3ew2gqv7rdmv8nj"),
    	getenv("useylzzrcbw6nak3"),
    	getenv("6VILXUa95VDiqCGWTpom")
  );

class DatabaseConnection {
    private $servername = "bpcek3ew2gqv7rdmv8nj-mysql.services.clever-cloud.com";
    private $username = "useylzzrcbw6nak3";
    private $password = "6VILXUa95VDiqCGWTpom";
    private $dbname = "bpcek3ew2gqv7rdmv8nj";
    private $charset = "utf8";
    private $conn;
    

    public function __construct() {
        try {
            // Establecer la conexión con la base de datos utilizando PDO
            $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
            // Establecer el modo de error de PDO a excepciones para manejar errores
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            // Si ocurre un error en la conexión, mostrar el mensaje de error
            echo "Error de conexión: " . $e->getMessage();
        }
    }

    public function getConnection() {
        return $this->conn;
    }
}
?>

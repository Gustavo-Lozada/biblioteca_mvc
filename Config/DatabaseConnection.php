<?php
class DatabaseConnection {
    private $servername = "ejemplo.mysql.clever-cloud.com";
    private $username = "usuario_bd";
    private $password = "contraseña_bd";
    private $dbname = "nombre_bd";
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

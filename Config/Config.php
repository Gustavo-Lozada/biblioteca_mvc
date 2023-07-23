<?php

private $hostname = "bpcek3ew2gqv7rdmv8nj-mysql.services.clever-cloud.com";
private $database = "bpcek3ew2gqv7rdmv8nj";
private $username = "useylzzrcbw6nak3";
private $password = "6VILXUa95VDiqCGWTpom";
private $charset = "utf8";

function conectar()
    {
        try{
            $conexion = "mysql:host=" . $this->hostname . "; dbname=" . $this->database . "; charset=" . $this->charset;
            $options = [
                PDD::ATTR_ERMODE => PDD::ERRMODE_EXCEPTION,
                PDD::ATRR_EMULATE_PREPARES => false
                ];

            $pdo = new PDO($conexion, $this->username, $this->password, $options);
            return $pdo;
        } catch (PDOException $e) {
            echo 'Error conexion: ' . $e;
            exit;
        }
    }

?>

<?php
// Incluir la clase de conexión a la base de datos
require_once ("Config/DatabaseConnection.php");

// Crear una instancia de la conexión a la base de datos
$databaseConnection = new DatabaseConnection();

// Obtener la conexión
$conexion = $databaseConnection->getConnection();

// Realizar una consulta SELECT
$consulta = "SELECT * FROM tabla";
$statement = $conexion->prepare($consulta);
$statement->execute();

// Recorrer los resultados
while ($fila = $statement->fetch(PDO::FETCH_ASSOC)) {
    // Hacer algo con los datos obtenidos
    echo $fila['columna1'] . ' - ' . $fila['columna2'] . '<br>';
}
?>

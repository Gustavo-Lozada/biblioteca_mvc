<?php
require_once("Config/Config.php");
require_once("Helpers/Helpers.php");
$url = isset($_GET['url']) ? $_GET['url'] : "Home/home";
$arrUrl = explode("/", $url);
$controller = $arrUrl[0];
$methop = $arrUrl[0];
$params = "";
if (isset($arrUrl[1])) {
    if ($arrUrl[1] != "") {
        $methop = $arrUrl[1];
    }
}
if (isset($arrUrl[2])) {
    if ($arrUrl[2] != "") {
        for ($i=2; $i < count($arrUrl); $i++) { 
            $params .= $arrUrl[$i]. ',';
        }
        $params = trim($params, ',');
    }
}
require_once("Libraries/Core/Autoload.php");
require_once("Libraries/Core/Load.php");


// Incluir la clase de conexión a la base de datos
require_once 'DatabaseConnection.php';

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

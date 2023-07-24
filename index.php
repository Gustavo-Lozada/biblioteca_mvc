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

$bdd = new PDO(
    	"mysql:host=" . getenv("bpcek3ew2gqv7rdmv8nj-mysql.services.clever-cloud.com") . ";dbname=" . getenv("bpcek3ew2gqv7rdmv8nj"),
    	getenv("useylzzrcbw6nak3"),
    	getenv("6VILXUa95VDiqCGWTpom")
  );
?>

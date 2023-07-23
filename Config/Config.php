<?php

private $hostname = "bpcek3ew2gqv7rdmv8nj-mysql.services.clever-cloud.com";
private $database = "bpcek3ew2gqv7rdmv8nj";
private $username = "useylzzrcbw6nak3";
private $password = "6VILXUa95VDiqCGWTpom";
private $charset = "utf8";

  $bdd = nueva PDO(
    	"mysql:host=". getenv("bpcek3ew2gqv7rdmv8nj-mysql.services.clever-cloud.com") . ";nombrebd=" . getenv("bpcek3ew2gqv7rdmv8nj"),
    	getenv("useylzzrcbw6nak3"),
    	getenv("6VILXUa95VDiqCGWTpom")
  );

?>

<?php
    const HOST = "bpcek3ew2gqv7rdmv8nj-mysql.services.clever-cloud.com";
    const BD = "bpcek3ew2gqv7rdmv8nj";
    const DB_USER = "useylzzrcbw6nak3";
    const PASS = "6VILXUa95VDiqCGWTpom";
    const CHARSET = "charset=utf8";


  $bdd = nueva PDO(
    	"mysql:host=". getenv("bpcek3ew2gqv7rdmv8nj-mysql.services.clever-cloud.com") . ";nombrebd=" . getenv("bpcek3ew2gqv7rdmv8nj"),
    	getenv("useylzzrcbw6nak3"),
    	getenv("6VILXUa95VDiqCGWTpom")
  );

?>

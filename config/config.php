<?php
$folderPath = dirname($_SERVER["SCRIPT_NAME"]); 
$urlPath = $_SERVER["REQUEST_URI"];
$url = substr($urlPath, strlen($folderPath));
define("URL",$url);
define("URLSYS","http://localhost/CRUDSCM/");
define("URLHOME", "http://localhost/CRUDSCM/home/");
define("URLSYSIMG", "http://localhost/CRUDSCM/img/");
define("APP_SESSION_NAME","CRUD");
date_default_timezone_set("America/Mexico_City");
?>

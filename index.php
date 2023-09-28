<?php
require_once "views/session/session_start.php";
require_once "routers/router.php";
$routers = new router();
$routers->run();
?>

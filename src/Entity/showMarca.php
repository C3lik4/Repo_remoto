<?php

include_once("autoloader.php");

$desplegable1 = new marca();

echo json_encode($desplegable1->show());



?>
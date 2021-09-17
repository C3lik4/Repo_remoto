<?php

include_once("autoloader.php");

$modelo1 = new modelo();

echo json_encode($modelo1->show());

?>
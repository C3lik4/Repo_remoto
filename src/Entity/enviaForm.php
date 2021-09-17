<?php

include_once("autoloader.php");

$venta1 = new ventas();
echo json_encode($venta1->add());


?>
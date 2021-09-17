<?php
include_once("autoloader.php");

$cartera = new cartera();

echo json_encode($cartera->show());
?>
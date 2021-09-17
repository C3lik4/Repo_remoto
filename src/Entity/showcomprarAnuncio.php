<?php

include_once("autoloader.php");

$comprarAnuncio = new comprarAnuncio();
echo json_encode($comprarAnuncio->update());


?>
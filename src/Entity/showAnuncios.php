<?php

include_once("autoloader.php");
$anuncio = new anuncios();

echo json_encode($anuncio->show());

?>
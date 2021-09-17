<?php

require_once './autoloader.php';

$nuevoRegistro = new Register();

$insertarRegistro = $nuevoRegistro->add();

echo json_encode($insertarRegistro);
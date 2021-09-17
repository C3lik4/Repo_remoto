<?php
function cargador($clase)
{
    $dir = ["Clases", "Contracts"];
    $fileExist = false;
    foreach ($dir as $directorio) {
        $fichero = __DIR__ . "/$directorio/{$clase}.php";
        if (file_exists($fichero)) {
            require_once $fichero;
            $fileExist = true;
        }
    }
    if (!$fileExist) {
        die("el fichero de clase {$clase}.php no existe");
    }
}

spl_autoload_register("cargador");

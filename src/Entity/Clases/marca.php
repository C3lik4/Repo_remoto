<?php

class marca extends Conexion implements ViewInterface{

    


    public function get($id=null){

        $sql = "SELECT * FROM `make`";

        $result = $this->conn->query($sql);

        return $result;
    }


    public function show($id=null){

        $marcas = $this->get();

        $array_marcas = $marcas->fetch_all(MYSQLI_ASSOC);

        return $array_marcas;

    }
}


?>
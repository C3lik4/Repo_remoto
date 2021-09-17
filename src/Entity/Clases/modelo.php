<?php

class modelo extends Conexion implements ViewInterface{

    public function get($id = null){

        $sql = "SELECT * FROM `model`";

        $result = $this->conn->query($sql);

        return $result;
    }

    public function show($id = null){

        $modelos = $this->get();

        $array_modelos = $modelos->fetch_all(MYSQLI_ASSOC);

        return $array_modelos;

    }




}


?>
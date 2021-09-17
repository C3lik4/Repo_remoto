<?php

class anuncios extends Conexion implements ViewInterface{

    public function get($id = null){

        $sql = "SELECT id_anuncio, make.title as 'Marca' ,model.title as 'modelo', km, ano, precio, color, foto FROM Anuncios INNER JOIN model on Anuncios.model_id = model.id INNER JOIN make ON make.id = Anuncios.make_id";
        $resultado = $this->conn->query($sql);
        return $resultado;
    }

    public function show($id = null){

        $anuncios = $this->get();

        $array_anuncios = $anuncios->fetch_all(MYSQLI_ASSOC);

        return $array_anuncios;
    }
}

?>
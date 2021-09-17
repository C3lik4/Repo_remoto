<?php

class comprarAnuncio extends Conexion implements ViewInterface, CrudInterface{

    public function __construct()
    {
        parent::__construct();
        session_start();
    }


    public function get($id = null){
        
    }

    public function show($id = null){

    }
   
    public function update($values = null){
        $id = $_GET["id"];
        $email = $_SESSION["loggedIn"];
       
        $sql = "UPDATE usuarios INNER JOIN anuncios SET usuarios.dinero = usuarios.dinero - anuncios.precio WHERE anuncios.id_anuncio = $id AND usuarios.email = $email";
        $result = $this->conn->query($sql);
    
        return $result;
    }

    public function delete($id = null){



    }

    public function add($values = null){


    }







}




?>
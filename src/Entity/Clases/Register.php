<?php
class Register extends Conexion implements CrudInterface
{
    public function __construct()
    {
        parent::__construct();
    }
    public function get($id = null)
    {
        return null;
    }

    public function show($id = null)
    {
        return null;
    }

    public function add($values = null)
    {
        if (count($_POST) > 0) {
            $nombreUser = $_POST["Nombre"];
            $apellidoUser = $_POST["Apellidos"];
            $emailUser = $_POST["Email"];
            $phoneUser = $_POST["telefono"];
            $userPassword = $_POST["password"];
            $securePassword = password_hash($userPassword, PASSWORD_BCRYPT);


            $stmt = $this->conn->prepare("INSERT INTO usuarios(nombre,apellidos,email,tlf,securePassword) VALUES (?,?,?,?,?)");
            $stmt->bind_param("sssis", $nombreUser, $apellidoUser, $emailUser, $phoneUser, $securePassword);
            $result = $stmt->execute();
            $stmt->close();
            return ($result);
        }
    }


    public function update($request)
    {
        return null;
    }
    public function delete($id)
    {
        return null;
    }
}

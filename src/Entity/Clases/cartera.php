<?php
class cartera extends Conexion implements ViewInterface, CrudInterface
{
    public function __construct()
    {
        parent::__construct();
        session_start();
    }


    public function get($id = null)
    {
        //session_start();

        $email = $_SESSION["loggedIn"];
        $sql = "SELECT dinero FROM usuarios WHERE email = '$email'";
        $resultado = $this->conn->query($sql);

        return $resultado;
    }

    public function update($values = null)
    {
        //session_start();

        $correo = $_SESSION["loggedIn"];
        $cantidad = $_POST["cantidad"];

        $stmt = $this->conn->prepare("UPDATE usuarios SET dinero = ( dinero + ? ) WHERE email = '$correo'");
        $stmt->bind_param("i", $cantidad);
        $result = $stmt->execute();
        $stmt->close();
        return ($result);
    }


    public function delete($id = null)
    {
    }

    public function add($values = null)
    {
    }

    public function show($id = null)
    {
        $result = $this->get();
        if ($result->num_rows > 0) {
            return $result->fetch_all(MYSQLI_ASSOC);
        }
        return null;
    }
}

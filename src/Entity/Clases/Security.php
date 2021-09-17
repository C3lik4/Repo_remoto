<?php
class Security extends Conexion implements ViewInterface, CrudInterface
{
    private $loginPage = "../public/login.php";
    private $homePage = "../public/indexSesion.php";
    public function __construct()
    {
        parent::__construct();
        session_start();
    }

    public function checkLoggedIn()
    {
        //session_start();
        if (!isset($_SESSION["loggedIn"]) || !$_SESSION["loggedIn"]) {
            header("Location: " . $this->loginPage);
        }
    }

    public function doLogin()
    {
       // session_start();

        if (count($_POST) > 0) {
            $user = $this->getUser($_POST["userName"]);
            $_SESSION["loggedIn"] = $this->checkUser($user, $_POST["userPassword"]) ? $user["email"] : false;
            if ($_SESSION["loggedIn"]) {
                header("Location: " . $this->homePage);
            } else {
                return "Nombre de usuario o contraseña incorrectos";
            }
        } else {
            return null;
        }
    }

    public function getUserData()
    {

        if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"]) {
            return $_SESSION["loggedIn"];
        }
    }

    private function checkUser($user, $userPassword)
    {

        if ($user) {
            //return $this->checkPassword($user["userPassword"], $userPassword);
            return $this->checkPassword($user["securePassword"], $userPassword);
        } else {
            return false;
        }
    }

    private function checkPassword($securePassword, $userPassword)
    {

        return password_verify($userPassword, $securePassword);
        //return ($userPassword === $securePassword);
    }

    private function getUser($userName)
    {
        $sql = "SELECT * FROM usuarios WHERE email = '$userName'";
        $result = $this->conn->query($sql);
        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            return false;
        }
    }

    public function get($id = null)
    {
        $email = $this->getUserData();
        $sql = "SELECT dinero FROM usuarios WHERE email = '$email'";
        $resultado = $this->conn->query($sql);

        return $resultado;
    }

    public function update($values = null)
    {
    }

    public function delete($id = null)
    {
    }

    public function add($values = null)
    {
    }

    public function show($id = null)
    {

        $dinero = $this->get();

        $array_dinero = $dinero->fetch_all(MYSQLI_ASSOC);

        return $array_dinero;
    }
}

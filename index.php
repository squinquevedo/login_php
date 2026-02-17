<?php
require_once "controller/UsuarioController.php";

session_start();
$controller = new UsuarioController();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["action"])) {
    if ($_POST["action"] == "login") {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $user = $controller->login($username, $password);

        if ($user) {
            $_SESSION["user"] = $user;
            header("Location: index.php");
        } else {
            echo "usuario o contraseña incorrectos";
        }
    }
}

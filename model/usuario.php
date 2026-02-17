<?php
// model/usuario.php
require_once "config/conexion.php";

class usuario {
    private $db;

    public function __construct(){
        $this->db = (new conexion())->conn;
    }

    public function login($username, $password) {
        $query = "SELECT * FROM usuarios WHERE username = :username AND password = :password";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":password", $password);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>
<?php
    //controler/UsuarioControler.php
    require_once "model/usuario.php";

    class UsuarioController {
        private $usuarioModel;

        public function __construct() {
            $this->usuarioModel = new Usuario();
        }

        public function login($username, $password) {
            return $this->usuarioModel->login($username, $password);
        }

    }
?>
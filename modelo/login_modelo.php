<?php
    class Login_modelo{
        private $db;

        public function __construct(){
            require_once("modelo/Conectar.php");
            $this->db=Conectar::conexion();
        }

    }

?>
<?php
    class Login_modelo{
        private $pd;

        public function __construct(){
            require_once("modelo/Conectar.php");
            $this->pb=Conectar::conexion();
        }

    }

?>
<?php
    class LineaInvestigacion_modelo{
        private $hd;

        public function __construct(){
            require_once("../modelo/Conectar.php");
            $this->hd=Conectar::conexion();
        }

    }

?>
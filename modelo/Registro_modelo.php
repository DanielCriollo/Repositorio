<?php
    class Registro_modelo{
        private $db;
        private $paises;
        private $departamentoss;
        private $municipios;
        private $tipo_documentos;
        private $tipo_sexos;
        private $tipo_estados_civiles;
        private $tipoInvestigadores;

        public function __construct(){
            require_once("../modelo/Conectar.php");
            $this->db=Conectar::conexion();
        }

        public function get_municipio(){
            $consulta=$this->db->query("SELECT * FROM municipio");
            while($filas_uno=$consulta->fetch(PDO::FETCH_ASSOC)){
                $this->municipios[]=$filas_uno;
            }
            return $this->municipios;
        }

        public function get_tipo_documento(){
            $consulta_dos=$this->db->query("SELECT * FROM tipo_documento");
            while($filas_dos=$consulta_dos->fetch(PDO::FETCH_ASSOC)){
                $this->tipo_documentos[]=$filas_dos;
            }
            return $this->tipo_documentos;
        }

        public function get_sexo(){
            $consulta_tres=$this->db->query("SELECT * FROM sexo");
            while($filas_tres=$consulta_tres->fetch(PDO::FETCH_ASSOC)){
                $this->tipo_sexos[]=$filas_tres;
            }
            return $this->tipo_sexos;
        }

        public function get_estado_civil(){
            $consulta_cuatro=$this->db->query("SELECT * FROM estado_civil");
            while($filas_cuatro=$consulta_cuatro->fetch(PDO::FETCH_ASSOC)){
                $this->tipo_estados_civiles[]=$filas_cuatro;
            }
            return $this->tipo_estados_civiles;
        }

        public function get_pais(){
            $consulta_cinco=$this->db->query("SELECT * FROM pais");
            while($filas_cinco=$consulta_cinco->fetch(PDO::FETCH_ASSOC)){
                $this->paises[]=$filas_cinco;
            }
            return $this->paises;
        }

        public function get_departamentoss(){
            $consulta_seis=$this->db->query("SELECT * FROM departamento");
            while($filas_seis=$consulta_seis->fetch(PDO::FETCH_ASSOC)){
                $this->departamentoss[]=$filas_seis;
            }
            return $this->departamentoss;
        }

        public function get_tipoInvetigador(){
            $consulta_siete=$this->db->query("SELECT * FROM tipo_investigador");
            while($filas_siete=$consulta_siete->fetch(PDO::FETCH_ASSOC)){
                $this->tipoInvestigadores[]=$filas_siete;
            }
            return $this->tipoInvestigadores;
        }

        
    }
?>
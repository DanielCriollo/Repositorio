<?php
    class ActualizarPro_modelo{
        private $pd;
        private $universidades;
        private $facultades;
        private $programas;
        private $gruposInvestigciones;
        private $categorias_grupos;
        private $grandesareasconocimientos;
        private $areasconocimientos;
        private $departamentos;
        private $municipios;
        private $principales;
        private $lineasEstrategicas;
        private $alcancesTematicos;
        private $estadosProyectos;
        private $tipos_poblaciones;

        public function __construct(){
            require_once("../modelo/Conectar.php");
            $this->pd=Conectar::conexion();
        }

        public function get_universidad(){
            $consulta_uno=$this->pd->query("SELECT * FROM universidad");
            while($filas_uno=$consulta_uno->fetch(PDO::FETCH_ASSOC)){
                $this->universidades[]=$filas_uno;
            }
            return $this->universidades;
        }

        public function get_facultad(){
            $consulta_dos=$this->pd->query("SELECT * FROM facultad");
            while($filas_dos=$consulta_dos->fetch(PDO::FETCH_ASSOC)){
                $this->facultades[]=$filas_dos;
            }
            return $this->facultades;
        }

        public function get_programa(){
            $consulta_tres=$this->pd->query("SELECT * FROM programa");
            while($filas_tres=$consulta_tres->fetch(PDO::FETCH_ASSOC)){
                $this->programas[]=$filas_tres;
            }
            return $this->programas;
        }

        public function get_grupoInvestigacion(){
            $consulta_cuatro=$this->pd->query("SELECT * FROM grupo_investigacion");
            while($filas_cuatro=$consulta_cuatro->fetch(PDO::FETCH_ASSOC)){
                $this->gruposInvestigciones[]=$filas_cuatro;
            }
            return $this->gruposInvestigciones;
        }

        public function get_categoria_grupo(){
            $consulta_cinco=$this->pd->query("SELECT * FROM categoria_grupo_investigacion");
            while($filas_cinco=$consulta_cinco->fetch(PDO::FETCH_ASSOC)){
                $this->categorias_grupos[]=$filas_cinco;
            }
            return $this->categorias_grupos;
        }

        public function get_granareaconocimiento(){
            $consulta_seis=$this->pd->query("SELECT * FROM gran_area_conocimiento");
            while($filas_seis=$consulta_seis->fetch(PDO::FETCH_ASSOC)){
                $this->grandesareasconocimientos[]=$filas_seis;
            }
            return $this->grandesareasconocimientos;
        }

        public function get_areas_conocimiento(){
            $consulta_siete=$this->pd->query("SELECT * FROM area_conocimiento");
            while($filas_siete=$consulta_siete->fetch(PDO::FETCH_ASSOC)){
                $this->areasconocimientos[]=$filas_siete;
            }
            return $this->areasconocimientos;
        }

        public function get_departmento(){
            $consulta_ocho=$this->pd->query("SELECT * FROM departamento");
            while($filas_ocho=$consulta_ocho->fetch(PDO::FETCH_ASSOC)){
                $this->departamentos[]=$filas_ocho;
            }
            return $this->departamentos;
        }
        
        public function get_municipio(){
            $consulta_nueve=$this->pd->query("SELECT * FROM municipio");
            while($filas_nueve=$consulta_nueve->fetch(PDO::FETCH_ASSOC)){
                $this->municipios[]=$filas_nueve;
            }
            return $this->municipios;
        }

        public function get_Principal(){
            session_start();
            if(!isset($_SESSION["documento"])){
                header("location:Login_nuevo.php");
            }
            $idusere= $_SESSION["documento"];
            $consulta_diez=$this->pd->query("SELECT * FROM investigador_principal WHERE num_cedula='$idusere'");
            while($filas_diez=$consulta_diez->fetch(PDO::FETCH_ASSOC)){
                $this->principales[]=$filas_diez;
            }
            return $this->principales;
        }

        public function get_lineaEstrategica(){
            $consulta_once=$this->pd->query("SELECT * FROM linea_estrategica");
            while($filas_once=$consulta_once->fetch(PDO::FETCH_ASSOC)){
                $this->lineasEstrategicas[]=$filas_once;
            }
            return $this->lineasEstrategicas;
        }

        public function get_alcanceTematico(){
            $consulta_doce=$this->pd->query("SELECT * FROM alcance_tematico");
            while($filas_doce=$consulta_doce->fetch(PDO::FETCH_ASSOC)){
                $this->alcancesTematicos[]=$filas_doce;
            }
            return $this->alcancesTematicos;
        }

        public function get_tipoPoblacion(){
            $consulta_trece=$this->pd->query("SELECT * FROM tipo_poblacion");
            while($filas_trece=$consulta_trece->fetch(PDO::FETCH_ASSOC)){
                $this->tipos_poblaciones[]=$filas_trece;
            }
            return $this->tipos_poblaciones;
        }

        public function get_estadoProyecto(){
            $consulta_catorce=$this->pd->query("SELECT * FROM estado_proyecto");
            while($filas_catorce=$consulta_catorce->fetch(PDO::FETCH_ASSOC)){
                $this->estadosProyectos[]=$filas_catorce;
            }
            return $this->estadosProyectos;
        }

    }

?>
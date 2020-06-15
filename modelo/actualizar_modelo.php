<?php
    class Actualizar_modelo{
        private $pd;
        private $registros;
        private $paises;
        private $departamentoss;
        private $municipios;
        private $tipo_documentos;
        private $tipo_sexos; 
        private $tipo_estados_civiles; 
        private $tipoInvestigadores;

        public function __construct(){
            require_once("../modelo/Conectar.php");
            $this->pd=Conectar::conexion();
        }

        public function get_pais(){
            $consulta_cinco=$this->pd->query("SELECT * FROM pais");
            while($filas_cinco=$consulta_cinco->fetch(PDO::FETCH_ASSOC)){
                $this->paises[]=$filas_cinco;
            }
            return $this->paises;
        }

        public function get_departamentoss(){
            $consulta_seis=$this->pd->query("SELECT * FROM departamento");
            while($filas_seis=$consulta_seis->fetch(PDO::FETCH_ASSOC)){
                $this->departamentoss[]=$filas_seis;
            }
            return $this->departamentoss;
        }

        public function get_municipio(){
            $consulta=$this->pd->query("SELECT * FROM municipio");
            while($filas_uno=$consulta->fetch(PDO::FETCH_ASSOC)){
                $this->municipios[]=$filas_uno;
            }
            return $this->municipios;
        }

        public function get_tipo_documento(){
            $consulta_dos=$this->pd->query("SELECT * FROM tipo_documento");
            while($filas_dos=$consulta_dos->fetch(PDO::FETCH_ASSOC)){
                $this->tipo_documentos[]=$filas_dos;
            }
            return $this->tipo_documentos;
        }

        public function get_sexo(){
            $consulta_tres=$this->pd->query("SELECT * FROM sexo");
            while($filas_tres=$consulta_tres->fetch(PDO::FETCH_ASSOC)){
                $this->tipo_sexos[]=$filas_tres;
            }
            return $this->tipo_sexos;
        }

        public function get_estado_civil(){
            $consulta_cuatro=$this->pd->query("SELECT * FROM estado_civil");
            while($filas_cuatro=$consulta_cuatro->fetch(PDO::FETCH_ASSOC)){
                $this->tipo_estados_civiles[]=$filas_cuatro;
            }
            return $this->tipo_estados_civiles;
        }

        public function get_tipoInvetigador(){
            $consulta_siete=$this->pd->query("SELECT * FROM tipo_investigador");
            while($filas_siete=$consulta_siete->fetch(PDO::FETCH_ASSOC)){
                $this->tipoInvestigadores[]=$filas_siete;
            }
            return $this->tipoInvestigadores;
        }
        
        public function get_registro(){
            session_start();
            if(!isset($_SESSION["documento"])){
                header("location:Login_nuevo.php");
            }
            $iduser= $_SESSION["documento"];
            $consultadiesiseis=$this->pd->query("SELECT d.primer_nombre, d.segundo_nombre,d.primer_apellido,d.segundo_apellido,d.fecha_nacimiento,
            d.numero_de_documento,d.fecha_expedicion_documento,d.id_municipio_de_expedicion_documento,  se.nombre_sexo,
            es.nombre_civil,d.telefono,d.correo_institucional,d.correo_personal,d.nombre_bibliografico,
            td.nombre_documento , mu.nombre_municipio ,dp.nombre_departamento,pa.nombre_pais,ti.nombre_investigador
            FROM director as d 
            INNER JOIN sexo as se on sexo_codigo=se.codigo
            inner join tipo_documento as td on tipo_documento_id=td.id 
            inner join municipio as mu on municipio_id=mu.id 
            inner join departamento as dp on departamento_id=dp.id 
            inner join pais as pa on pais_id=pa.id
            inner join tipo_investigador  as ti on tipo_investigador_id=ti.id
            inner join estado_civil as es on estado_civil_id=es.id
            where numero_de_documento='$iduser'");

            while($filas_diesiseis=$consultadiesiseis->fetch(PDO::FETCH_ASSOC)){
                $this->registros[]=$filas_diesiseis;
            }
            return $this->registros;
        }

    }

?>
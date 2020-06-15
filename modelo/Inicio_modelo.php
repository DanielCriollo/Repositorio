<?php
    class Inicio_modelo{
        private $db;
        private $registros;
        private $proyectos;
        private $verproyectos;
        private $principales;
        private $universidades;
        private $departamentos;
        private $grandesareasconocimientos;
        private $facultades;
        private $categorias_grupos;
        private $areasconocimientos;
        private $programas;
        private $estadosProyectos;
        private $municipios;
        private $lineasEstrategicas;
        private $alcancesTematicos;
        private $tipos_poblaciones;
        private $gruposInvestigciones;
        private $InvestigadoresPrincipales;
        private $LineasInvestigacion;       

        public function __construct(){
            require_once("../modelo/Conectar.php");
            $this->db=Conectar::conexion();
        }

        public function get_universidad(){
            $consulta_uno=$this->db->query("SELECT * FROM universidad");
            while($filas_uno=$consulta_uno->fetch(PDO::FETCH_ASSOC)){
                $this->universidades[]=$filas_uno;
            }
            return $this->universidades;
        }

        public function get_departmento(){
            $consulta_dos=$this->db->query("SELECT * FROM departamento");
            while($filas_dos=$consulta_dos->fetch(PDO::FETCH_ASSOC)){
                $this->departamentos[]=$filas_dos;
            }
            return $this->departamentos;
        }

        public function get_granareaconocimiento(){
            $consulta_tres=$this->db->query("SELECT * FROM gran_area_conocimiento");
            while($filas_tres=$consulta_tres->fetch(PDO::FETCH_ASSOC)){
                $this->grandesareasconocimientos[]=$filas_tres;
            }
            return $this->grandesareasconocimientos;
        }

        public function get_facultad(){
            $consulta_cuatro=$this->db->query("SELECT * FROM facultad");
            while($filas_cuatro=$consulta_cuatro->fetch(PDO::FETCH_ASSOC)){
                $this->facultades[]=$filas_cuatro;
            }
            return $this->facultades;
        }

        public function get_categoria_grupo(){
            $consulta_cinco=$this->db->query("SELECT * FROM categoria_grupo_investigacion");
            while($filas_cinco=$consulta_cinco->fetch(PDO::FETCH_ASSOC)){
                $this->categorias_grupos[]=$filas_cinco;
            }
            return $this->categorias_grupos;
        }

        public function get_areas_conocimiento(){
            $consulta_seis=$this->db->query("SELECT * FROM area_conocimiento");
            while($filas_seis=$consulta_seis->fetch(PDO::FETCH_ASSOC)){
                $this->areasconocimientos[]=$filas_seis;
            }
            return $this->areasconocimientos;
        }

        public function get_programa(){
            $consulta_siete=$this->db->query("SELECT * FROM programa");
            while($filas_siete=$consulta_siete->fetch(PDO::FETCH_ASSOC)){
                $this->programas[]=$filas_siete;
            }
            return $this->programas;
        }

        public function get_estadoProyecto(){
            $consulta_ocho=$this->db->query("SELECT * FROM estado_proyecto");
            while($filas_ocho=$consulta_ocho->fetch(PDO::FETCH_ASSOC)){
                $this->estadosProyectos[]=$filas_ocho;
            }
            return $this->estadosProyectos;
        }

        public function get_municipio(){
            $consulta_nueve=$this->db->query("SELECT * FROM municipio");
            while($filas_nueve=$consulta_nueve->fetch(PDO::FETCH_ASSOC)){
                $this->municipios[]=$filas_nueve;
            }
            return $this->municipios;
        }

        public function get_lineaEstrategica(){
            $consulta_diez=$this->db->query("SELECT * FROM linea_estrategica");
            while($filas_diez=$consulta_diez->fetch(PDO::FETCH_ASSOC)){
                $this->lineasEstrategicas[]=$filas_diez;
            }
            return $this->lineasEstrategicas;
        }

        public function get_alcanceTematico(){
            $consulta_once=$this->db->query("SELECT * FROM alcance_tematico");
            while($filas_once=$consulta_once->fetch(PDO::FETCH_ASSOC)){
                $this->alcancesTematicos[]=$filas_once;
            }
            return $this->alcancesTematicos;
        }

        public function get_tipoPoblacion(){
            $consulta_doce=$this->db->query("SELECT * FROM tipo_poblacion");
            while($filas_doce=$consulta_doce->fetch(PDO::FETCH_ASSOC)){
                $this->tipos_poblaciones[]=$filas_doce;
            }
            return $this->tipos_poblaciones;
        }

        public function get_grupoInvestigacion(){
            $consulta_trece=$this->db->query("SELECT * FROM grupo_investigacion");
            while($filas_trece=$consulta_trece->fetch(PDO::FETCH_ASSOC)){
                $this->gruposInvestigciones[]=$filas_trece;
            }
            return $this->gruposInvestigciones;
        }

        public function get_InvestigadorPrincipal(){
            $consulta_catorce=$this->db->query("SELECT * FROM investigador_principal");
            while($filas_catorce=$consulta_catorce->fetch(PDO::FETCH_ASSOC)){
                $this->InvestigadoresPrincipales[]=$filas_catorce;
            }
            return $this->InvestigadoresPrincipales;
        }

        public function get_LineaInvestigacion(){
            $consulta_quince=$this->db->query("SELECT * FROM linea_investigacion");
            while($filas_quince=$consulta_quince->fetch(PDO::FETCH_ASSOC)){
                $this->LineasInvestigacion[]=$filas_quince;
            }
            return $this->LineasInvestigacion;
        }
        
        public function get_registro(){
            session_start();
            if(!isset($_SESSION["documento"])){
                header("location:Login_nuevo.php");
            }
            $iduser= $_SESSION["documento"];
            $consultadiesiseis=$this->db->query("SELECT d.primer_nombre, d.segundo_nombre,d.primer_apellido,d.segundo_apellido,d.fecha_nacimiento,
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

        public function get_Principal(){
            if(!isset($_SESSION["documento"])){
                header("location:Login_nuevo.php");
            }
            $idusere= $_SESSION["documento"];
            $consulta_diecisiete=$this->db->query("SELECT * FROM investigador_principal WHERE num_cedula='$idusere'");
            while($filas_diecisiete=$consulta_diecisiete->fetch(PDO::FETCH_ASSOC)){
                $this->principales[]=$filas_diecisiete;
            }
            return $this->principales;
        }

        public function get_proyecto(){
            if(!isset($_SESSION["documento"])){
                header("location:Login_nuevo.php");
            }
            $idusere= $_SESSION["documento"];

            $consultadieciocho=$this->db->query("SELECT p.numAfectados,i.id,t.nombre_Pobla,mu.nombre_municipio,dp.nombre_departamento
            FROM proyecto as p
            INNER JOIN investigador_principal as i on investigador_principal_id=i.id
            inner join municipio as mu on municipioBene_id=mu.id 
            inner join departamento as dp on departamentoBene_id=dp.id 
            inner join tipo_poblacion as t on tipo_poblacion_id=t.id
            where num_cedula='$idusere'");

            while($filas_dieciocho=$consultadieciocho->fetch(PDO::FETCH_ASSOC)){
                $this->proyectos[]=$filas_dieciocho;
            }
            return $this->proyectos;

        }

        public function get_proyectosRealizados(){
            if(!isset($_SESSION["documento"])){
                header("location:Login_nuevo.php");
            }
            $idusero= $_SESSION["documento"];

            $consultadiecinueve=$this->db->query("SELECT p.url_grupLac,p.nombreGrupo,p.id,p.nombre_proyecto,p.numAfectados,p.nomInvestigador,
            u.nombre_universidad,i.nombre,e.nombre_estado
            FROM proyecto as p
            INNER JOIN estado_proyecto as e on estado_proyecto_id=e.id
            INNER JOIN universidad as u on universidad_id=u.id
            INNER JOIN investigador_principal as i on investigador_principal_id=i.id
            where num_cedula='$idusero'");

            while($filas_diecinueve=$consultadiecinueve->fetch(PDO::FETCH_ASSOC)){
                $this->verproyectos[]=$filas_diecinueve;
            }
            return $this->verproyectos;
        }
    }
?>
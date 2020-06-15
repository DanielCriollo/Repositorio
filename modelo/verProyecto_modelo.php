<?php


    class Ver_modelo{
        private $pd;
        private $verproyectos;
        
        public function __construct(){
            require_once("../modelo/Conectar.php");
            $this->pd=Conectar::conexion();
        } 

        /*
        
        public function get_MostrarproyectosRealizados(){
            session_start();
            if(!isset($_SESSION["documento"])){
                header("location:Login_nuevo.php");
            }
            =$this->pd->query("SELECT id FROM proyecto");

            $consultadiecinueve=$this->pd->query("SELECT p.nomInvestigador,p.telefono,p.url_grupLac,p.email,p.nombre_proyecto,p.nombreGrupo,p.problema_central,p.objetivo_general,p.objetivos_especificos,p.justificacion,p.descripcion_proyecto,p.resumen,p.presupuesto_estimado,p.cronograma_duracion_proyecto,p.numAfectados,
            u.nombre_universidad,
            fa.nombre_facultad,
            pro.nombre_programa,
            gru.nombre_GrupoInves,
            ca.nombre_categoria,
            gran.nombre_GranArea,
            nom.nombre_AreaCono,
            d.nombre_departamento,
            mu.nombre_municipio,
            ven.nombre_departamento,
            voy.nombre_municipio,
            lin.nombre_estrategica,
            alca.nombre_tematico,
            eje.nombre_estado,
            tip.nombre_Pobla,
            i.nombre            
            FROM proyecto as p
            INNER JOIN universidad as u on universidad_id=u.id
            INNER JOIN facultad as fa on facultad_id=fa.id
            INNER JOIN programa as pro on programa_id=pro.id
            INNER JOIN grupo_investigacion as gru on grupoInvestigacion_Id=gru.id
            INNER JOIN categoria_grupo_investigacion as ca on categoriaGrupo_id=ca.id
            INNER JOIN gran_area_conocimiento as gran on GranAreaCono_id=gran.id
            INNER JOIN area_conocimiento as nom on AreaConoci_id=nom.id
            INNER JOIN departamento as d on Departamento_id=d.id
            INNER JOIN municipio as mu on municipio_id=mu.id
            INNER JOIN linea_estrategica as lin on linea_estrategica_id=lin.id
            INNER JOIN alcance_tematico as alca on alcance_tematico_id=alca.id
            INNER JOIN estado_proyecto as eje on estado_proyecto_id=eje.id  
            INNER JOIN tipo_poblacion as tip on tipo_poblacion_id=tip.id
            INNER JOIN departamento as ven on departamentoBene_id=ven.id
            INNER JOIN municipio as voy on municipioBene_id=voy.id         
            INNER JOIN investigador_principal as i on investigador_principal_id=i.id
            where id=''");

            while($filas_diecinueve=$consultadiecinueve->fetch(PDO::FETCH_ASSOC)){
                $this->verproyectos[]=$filas_diecinueve;
            }
            return $this->verproyectos;
        }
    */
    }



?>
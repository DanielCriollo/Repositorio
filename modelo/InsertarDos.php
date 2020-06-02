<?php
    require_once("Conectar.php");
    $base=Conectar::conexion();

    $registros=$base->query("SELECT * FROM proyecto")->fetchAll(PDO::FETCH_OBJ);

    if(isset($_POST["hr"])){
        $nom_investigador=$_POST["nom_inves"];
        $telefono=$_POST["telefono"];
        $UrlgrupLac=$_POST["GrupUrl"];
        $correo=$_POST["correo"];
        $universidad=$_POST["nomUniversidad"];
        $facultad=$_POST["nomFacultad"];
        $programas=$_POST["programas"];
        $grupoInvestigacion=$_POST["Grupo_investigacion"];
        $cateGrupo=$_POST["cateGrupo"];
        $GranAreaConoci=$_POST["GranAreaConoci"];
        $area_conocimiento=$_POST["area_conocimiento"];
        $departamento=$_POST["departamento"];             
        $nomPro=$_POST["nomPro"];
        $nomGru=$_POST["nomGru"];   
        $lineaEstra=$_POST["lineaEstra"];
        $alcanceTema=$_POST["alcanceTema"];
        $central=$_POST["central"];
        $general=$_POST["general"];
        $especifico=$_POST["especifico"];
        $justificacion=$_POST["justificacion"];
        $descriPro=$_POST["descriPro"];        
        $resumen=$_POST["resumen"];
        $anexo=$_POST["anexo"];
        $presuEstimado=$_POST["presuEstimado"];
        $estadoPro=$_POST["estadoPro"];
        $cronoDuracion=$_POST["cronoDuracion"];
        $departamentobene=$_POST["departamento_bene"];
        $municipio=$_POST["municipio_bene"];  
        $tipoPoblacion=$_POST["tipPoblacion"]; 
        $numAfectados=$_POST["numAfectados"];        

        $sql="INSERT INTO proyecto (nomInvestigador,telefono,url_grupLac,email,universidad_id,facultad_id,programa_id,grupoInvestigacion_Id,categoriaGrupo_id,
        GranAreaCono_id,AreaConoci_id,Departamento_id,nombre_proyecto,nombreGrupo,municipio_id,linea_estrategica_id,alcance_tematico_id,
        problema_central,objetivo_general,objetivos_especificos,justificacion,descripcion_proyecto,resumen,anexo,presupuesto_estimado,
        estado_proyecto_id,tipo_poblacion_id,investigador_principal_id,cronograma_duracion_proyecto,departamentoBene_id,numAfectados) VALUES(:uno,:dos,
        :tres,:cuatro,:cinco,:seis,:siete,:ocho,:nueve,:diez,:once,:doce,:trece,:catorce,:quince,:dieciseis,:diecisiete,:dieciocho,:diecinueve,
        :veinte,:veintiuno,:veintidos,:veintitres,:veinticuatro,:veinticinco,:veintiseis)";

        $resultado=$base->prepare($sql);
        $resultado->execute(array(":nomInves"=>$nom_investigador,":telefono"=>$telefono,":universidadId"=>$universidad,":facultadId"=>$facultad,
        ":programaId"=>$programas,":grupoInvestigacionId"=>$grupoInvestigacion,":cateGrupoId"=>$cateGrupo,":granAreaConoId"=>$GranAreaConoci,":areaConocimientoId"=>$area_conocimiento,
        ":urlGrupLac"=>$UrlgrupLac,":emailElec"=>$correo,":nombreProyecto"=>$nomPro,":nomGrupo"=>$nomGru,":departamentoId"=>$departamento,
        ":lineaEstrategicaId"=>$lineaEstra,":alcanceTematicoId"=>$alcanceTema,":problemaCentral"=>$central,":objetivoGeneral"=>$general,
        ":objetivosEspecificos"=>$especifico,":justificacion"=>$justificacion,":descripcionServicio"=>$descriPro,":resumen"=>$resumen,
        ":anexo"=>$anexo,":presupuestoEstimado"=>$presuEstimado,":estadoProyectoId"=>$estadoPro,":cronogramaDuracionProyecto"=>$cronoDuracion));

        header("Location:Inicio_nuevo.php");
    }
?>
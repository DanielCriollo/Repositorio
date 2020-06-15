<?php
    require_once("Conectar.php");
    $base_dos=Conectar::conexion();

    $registros=$base_dos->query("SELECT * FROM proyecto")->fetchAll(PDO::FETCH_OBJ);

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
        $municipio=$_POST["municipio"];
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
        $tipoPoblacion=$_POST["tipPoblacion"];
        $investigadorPrincipal=$_POST["invetigaPrincipal"];
        $cronoDuracion=$_POST["cronoDuracion"];
        $departamentobene=$_POST["departamento_bene"];
        $municipio_bene=$_POST["municipio_bene"];        
        $numAfectados=$_POST["numAfectados"]; 

        $sql_dos="INSERT INTO proyecto (nomInvestigador,telefono,url_grupLac,email,universidad_id,facultad_id,programa_id,grupoInvestigacion_Id,categoriaGrupo_id,
        GranAreaCono_id,AreaConoci_id,Departamento_id,nombre_proyecto,nombreGrupo,municipio_id,linea_estrategica_id,alcance_tematico_id,
        problema_central,objetivo_general,objetivos_especificos,justificacion,descripcion_proyecto,resumen,anexo,presupuesto_estimado,
        estado_proyecto_id,tipo_poblacion_id,investigador_principal_id,cronograma_duracion_proyecto,departamentoBene_id,municipioBene_id,numAfectados) VALUES(:uno,:dos,
        :tres,:cuatro,:cinco,:seis,:siete,:ocho,:nueve,:diez,:once,:doce,:trece,:catorce,:quince,:dieciseis,:diecisiete,:dieciocho,:diecinueve,
        :veinte,:veintiuno,:veintidos,:veintitres,:veinticuatro,:veinticinco,:veintiseis,:veintisiete,:veintiocho,:veintinueve,:treinta,:treintaiuno,:treintaidos)";



        $resultado=$base_dos->prepare($sql_dos);
        $resultado->execute(array(":uno"=>$nom_investigador,":dos"=>$telefono,":tres"=>$UrlgrupLac,":cuatro"=>$correo,
        ":cinco"=>$universidad,":seis"=>$facultad,":siete"=>$programas,":ocho"=>$grupoInvestigacion,":nueve"=>$cateGrupo,
        ":diez"=>$GranAreaConoci,":once"=>$area_conocimiento,":doce"=>$departamento,":trece"=>$nomPro,":catorce"=>$nomGru,
        ":quince"=>$municipio,":dieciseis"=>$lineaEstra,":diecisiete"=>$alcanceTema,":dieciocho"=>$central,
        ":diecinueve"=>$general,":veinte"=>$especifico,":veintiuno"=>$justificacion,":veintidos"=>$descriPro,
        ":veintitres"=>$resumen,":veinticuatro"=>$anexo,":veinticinco"=>$presuEstimado,":veintiseis"=>$estadoPro,":veintisiete"=>$tipoPoblacion,":veintiocho"=>$investigadorPrincipal,
        ":veintinueve"=>$cronoDuracion,":treinta"=>$departamentobene,":treintaiuno"=>$municipio_bene,":treintaidos"=>$numAfectados));

        header("Location:Inicio_controlador.php");
    }
?>
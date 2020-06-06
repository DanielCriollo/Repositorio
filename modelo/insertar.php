<?php
    require_once("Conectar.php");
    $base=Conectar::conexion();

    $registros=$base->query("SELECT * FROM director")->fetchAll(PDO::FETCH_OBJ);

    if(isset($_POST["cr"])){
        $nom_uno=$_POST["nom_uno"];
        $nom_dos=$_POST["nom_dos"];
        $ape_uno=$_POST["ape_uno"];
        $ape_dos=$_POST["ape_dos"];
        $municipio=$_POST["municipio"];
        $fecha_nacimiento=$_POST["nacimiento"];
        $tipo_documento=$_POST["tip_documento"];
        $numero_documento=$_POST["num_documento"];
        $fecha_expedicion=$_POST["fecha_expedicion"];
        $municipio_expedicion=$_POST["lu_expedicion"];
        $sexo=$_POST["sexo"];
        $estado_civil=$_POST["estado_civil"];
        $telefono=$_POST["num_contacto"];
        $correo_institucional=$_POST["correo_institu"];
        $correo_personal=$_POST["correo_personal"];
        $nombre_bibliografico=$_POST["citas"];
        $tipo_investigador=$_POST["tip_investiga"];
        $contrasenas=$_POST["contrasena"];
        

        $sql="INSERT INTO director (primer_nombre,segundo_nombre,primer_apellido,
        segundo_apellido,municipio_id,fecha_nacimiento,tipo_documento_id,numero_de_documento,
        fecha_expedicion_documento,id_municipio_de_expedicion_documento,sexo_codigo,
        estado_civil_id,telefono,correo_institucional,correo_personal,nombre_bibliografico,
        tipo_investigador_id,clave) VALUES(:nom_uno,:nom_dos,:ape_uno,:ape_dos,:municipio,
        :fecha_nacimiento,:tipo_documento,:numero_documento,:fecha_expedicion,:municipio_expedicion,
        :sexo,:estado_civil,:telefono,:correo_institucional,:correo_personal,:nombre_bibliografico,
        :tipo_investigador,:seguridad)";

        $sql_tres="INSERT INTO investigador_principal(nombre, tipo_investigador_id) VALUES(:nominves,:tipoInves)";

        $resultado=$base->prepare($sql);
        $resultado_tres=$base->prepare($sql_tres);

        $resultado->execute(array(":nom_uno"=>$nom_uno,":nom_dos"=>$nom_dos,
        ":ape_uno"=>$ape_uno,":ape_dos"=>$ape_dos,":municipio"=>$municipio,
        ":fecha_nacimiento"=>$fecha_nacimiento,":tipo_documento"=>$tipo_documento,
        ":numero_documento"=>$numero_documento,":fecha_expedicion"=>$fecha_expedicion,
        ":municipio_expedicion"=>$municipio_expedicion,":sexo"=>$sexo,":estado_civil"=>$estado_civil,
        ":telefono"=>$telefono,":correo_institucional"=>$correo_institucional,":correo_personal"=>$correo_personal,
        ":nombre_bibliografico"=>$nombre_bibliografico,":tipo_investigador"=>$tipo_investigador,":seguridad"=>$contrasenas));

        $resultado_tres->execute(array(":nominves"=>$nom_uno,"tipoInves"=>$tipo_investigador));

        header("Location:../index.php");
    }
?>
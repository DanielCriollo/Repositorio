<?php

    require_once("Conectar.php");
    $base=Conectar::conexion();

    $actualizar=$base->query("SELECT * FROM director")->fetchAll(PDO::FETCH_OBJ);

        if(isset($_POST["ur"])){
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

            session_start();
            if(!isset($_SESSION["documento"])){
                header("location:Login_nuevo.php");
            }
            $iduser= $_SESSION["documento"];

            $sqls="UPDATE director SET primer_nombre=:nom_uno, segundo_nombre=:nom_dos, primer_apellido=:ape_uno,
                                        segundo_apellido=:ape_dos,municipio_id=:municipio,fecha_nacimiento=:fecha_nacimiento,
                                        tipo_documento_id=:tipo_documento,numero_de_documento=:numero_documento,
                                        fecha_expedicion_documento=:fecha_expedicion,id_municipio_de_expedicion_documento=:municipio_expedicion,
                                        sexo_codigo=:sexo,estado_civil_id=:estado_civil,telefono=:telefono,correo_institucional=:correo_institucional,
                                        correo_personal=:correo_personal,nombre_bibliografico=:nombre_bibliografico,
                                        tipo_investigador_id=:tipo_investigador,clave=:seguridad WHERE numero_de_documento='$iduser'";
            
            $sql_tres="UPDATE investigador_principal SET nombre=:nominves, num_cedula=:cedula,tipo_investigador_id=:tipoInves WHERE num_cedula='$iduser'";
        
            $resultado=$base->prepare($sqls);
            $resultado_tres=$base->prepare($sql_tres);
            
            $resultado->execute(array(":nom_uno"=>$nom_uno, ":nom_dos"=>$nom_dos, ":ape_uno"=>$ape_uno, ":ape_dos"=>$ape_dos,
                                        ":municipio"=>$municipio,":fecha_nacimiento"=>$fecha_nacimiento,":tipo_documento"=>$tipo_documento,
                                        ":numero_documento"=>$numero_documento,":fecha_expedicion"=>$fecha_expedicion,
                                        ":municipio_expedicion"=>$municipio_expedicion,":sexo"=>$sexo,":estado_civil"=>$estado_civil,
                                        ":telefono"=>$telefono,":correo_institucional"=>$correo_institucional,":correo_personal"=>$correo_personal,
                                        ":nombre_bibliografico"=>$nombre_bibliografico,":tipo_investigador"=>$tipo_investigador,":seguridad"=>$contrasenas));

            $resultado_tres->execute(array(":nominves"=>$nom_uno,":cedula"=>$numero_documento,":tipoInves"=>$tipo_investigador));
            header("location:../index.php");
        }
    ?>
<?php    
    session_start();
    if(isset($_SESSION["documento"])){
        header("location:controlador/Inicio_controlador.php");
    }

    if(isset($_POST["pr"])){           
                try{
                    require_once("Conectar.php");
                    $base_log=Conectar::conexion();
                    $sql="SELECT * FROM director WHERE numero_de_documento=:login AND clave=:password";
                    $resultado=$base_log->prepare($sql);
                    $login=htmlentities(addslashes($_POST["documen"]));
                    $password=htmlentities(addslashes($_POST["contra"]));
                    $resultado->bindValue(":login" , $login);
                    $resultado->bindValue(":password",$password);
                    $resultado->execute();
                    $numero_registro=$resultado->rowCount();

                    if($numero_registro!=0){
                        //echo "<h2>Adelante</h2>";
                        session_start();
                        $_SESSION["documento"]=$_POST["documen"];
                        header("location:controlador/Inicio_controlador.php");

                    }else{
                        header("location:index.php");
                    }

                    }catch(Exception $e){
                        die ("Error: " . $e->getMessage());
                    }
            }
?>

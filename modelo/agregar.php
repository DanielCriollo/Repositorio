<?php
    require_once("Conectar.php");
    $base_cinco=Conectar::conexion();

    $registros_cinco=$base_cinco->query("SELECT * FROM nuevalinea")->fetchAll(PDO::FETCH_OBJ);
    $registros_sies=$base_cinco->query("SELECT * FROM linea_investigacion")->fetchAll(PDO::FETCH_OBJ);

    if(isset($_POST["agrega"])){
        $nombre=$_POST["nombre"];
        $objLinea=$_POST["objLinea"];
        $LogroLinea=$_POST["LogroLinea"];
        $ImpactoLinea=$_POST["ImpactoLinea"];
        
        

        $sql="INSERT INTO nuevalinea (nombre,ObjetivoLinea,LogroLinea,ImpactoLinea) 
        VALUES(:uno,:dos,:tres,:cuatro)";

        $sql_tres="INSERT INTO linea_investigacion(nombre) VALUES(:nom)";

        $resultado=$base_cinco->prepare($sql);
        $resultado_tres=$base_cinco->prepare($sql_tres);

        $resultado->execute(array(":uno"=>$nombre,":dos"=>$objLinea,
        ":tres"=>$LogroLinea,":cuatro"=>$ImpactoLinea));

        $resultado_tres->execute(array(":nom"=>$nombre));

        header("Location:Inicio_controlador.php");
    }
?>
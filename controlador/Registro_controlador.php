<?php
    require_once("../modelo/Registro_modelo.php");

    $director=new Registro_modelo();
    $matrizPaises=$director->get_pais();
    $matrizdepartamentoss=$director->get_departamentoss();
    $matrizMunicipios=$director->get_municipio();
    $matrizTipoDocumentos=$director->get_tipo_documento();
    $matrizTipoSexos=$director->get_sexo();
    $matrizEstadosCiviles=$director->get_estado_civil();
    $matrizTipoInvestigadores=$director->get_tipoInvetigador();

    require_once("../vista/Registro_Nuevo.php");

?>
<?php
    require_once("../modelo/actualizar_modelo.php");

    $director=new Actualizar_modelo();
    $matrisRegistros=$director->get_registro();
    $matrizPaises=$director->get_pais();
    $matrizdepartamentoss=$director->get_departamentoss();
    $matrizMunicipios=$director->get_municipio();
    $matrizTipoDocumentos=$director->get_tipo_documento();
    $matrizTipoSexos=$director->get_sexo();
    $matrizEstadosCiviles=$director->get_estado_civil();
    $matrizTipoInvestigadores=$director->get_tipoInvetigador();

    require_once("../vista/actualizar_registro.php");

?>
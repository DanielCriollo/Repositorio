<?php
    require_once("../modelo/Inicio_modelo.php");

    $inicio=new Inicio_modelo();
    $matrizUniversidades=$inicio->get_universidad();
    $matrizDepartamentos=$inicio->get_departmento();
    $matrizGrandesAreasConocimientos=$inicio->get_granareaconocimiento();
    $matrizFacultades=$inicio->get_facultad();
    $matrizCategoriaGrupos=$inicio->get_categoria_grupo();
    $matrizAreasConocimientos=$inicio->get_areas_conocimiento();
    $matrizProgramas=$inicio->get_programa();
    $matrizEstadosProyectos=$inicio->get_estadoProyecto();
    $matrizMunicipios=$inicio->get_municipio();
    $matrizlineasEstrategicas=$inicio->get_lineaEstrategica();
    $matrizAlcancesTematicos=$inicio->get_alcanceTematico();
    $matrizTiposPoblaciones=$inicio->get_tipoPoblacion();
    $matrizgruposInvestigciones=$inicio->get_grupoInvestigacion();
    $matrizInvestigadoresPrincipales=$inicio->get_InvestigadorPrincipal();
    $matrizLineasInvestigaciones=$inicio->get_LineaInvestigacion();
    $matrisRegistros=$inicio->get_registro();
    $matrizPrincipales=$inicio->get_Principal();
    $matrizproyectos=$inicio->get_proyecto();
    $matrizverProyectos=$inicio->get_proyectosRealizados();

    require_once("../vista/Inicio_nuevo.php");

?>
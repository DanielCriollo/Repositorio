<?php
    require_once("../modelo/actualizarPro_modelo.php");

    $proyectoss=new ActualizarPro_modelo();
    $matrizUniversidades=$proyectoss->get_universidad();
    $matrizFacultades=$proyectoss->get_facultad();
    $matrizProgramas=$proyectoss->get_programa();
    $matrizgruposInvestigciones=$proyectoss->get_grupoInvestigacion();
    $matrizCategoriaGrupos=$proyectoss->get_categoria_grupo();
    $matrizGrandesAreasConocimientos=$proyectoss->get_granareaconocimiento();
    $matrizAreasConocimientos=$proyectoss->get_areas_conocimiento();
    $matrizDepartamentos=$proyectoss->get_departmento();
    $matrizMunicipios=$proyectoss->get_municipio();
    $matrizPrincipales=$proyectoss->get_Principal();
    $matrizlineasEstrategicas=$proyectoss->get_lineaEstrategica();
    $matrizAlcancesTematicos=$proyectoss->get_alcanceTematico();
    $matrizTiposPoblaciones=$proyectoss->get_tipoPoblacion();
    $matrizEstadosProyectos=$proyectoss->get_estadoProyecto();

    require_once("../vista/actualizar_proyecto.php");

?>
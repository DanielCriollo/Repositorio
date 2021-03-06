<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Inicio | Repositorios</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Responsive bootstrap 4 admin template" name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="../assets/images/favicon.ico">

    <!-- Plugins css -->
    <link href="../assets/libs/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet" />
    <link href="../assets/libs/switchery/switchery.min.css" rel="stylesheet" type="text/css" />

    <link href="../assets/libs/select2/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />
    <link href="../assets/libs/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
    <link href="../assets/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.css" rel="stylesheet">
    <link href="../assets/libs/bootstrap-datepicker/bootstrap-datepicker.css" rel="stylesheet">

    <!-- App css -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
    <link href="../assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-stylesheet" />

</head>

<body>
    <?php
        require("../modelo/InsertarDos.php");
       ?>

    <div id="wrapper">

        <!-- Navigation Bar-->
        <header id="topnav">

            <div class="navbar-custom" style="background-color: #1EB1BF;">
                <a class="d-flex justify-content-center navbar-brand"><img src="../assets/images/logo.png" height="50"
                        alt="mdb logo"></a>
            </div>
        </header>
        <div class="account-pages my-5">
            <div class="container " style="margin-top:12%;">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-12">
                        <div class="card mt-12">
                            <div class="card-header p-4 bg-primary">
                                <h4 class="text-white text-center mb-0 mt-0">Registro Nuevo Director</h4>
                            </div>
                            <div class="card-body">
                                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                                    <ul class="nav nav-tabs">
                                        <li class="nav-item">
                                            <a href="#inicio" data-toggle="tab" aria-expanded="false" class="nav-link">
                                                <span class="d-block d-sm-none"><i
                                                        class="mdi mdi-home-variant-outline font-18"></i></span>
                                                <span class="d-none d-sm-block">Inicio</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#proyecto" data-toggle="tab" aria-expanded="true"
                                                class="nav-link active">
                                                <span class="d-block d-sm-none"><i
                                                        class="mdi mdi-account-outline font-18"></i></span>
                                                <span class="d-none d-sm-block">Proyecto</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#linea" data-toggle="tab" aria-expanded="false" class="nav-link">
                                                <span class="d-block d-sm-none"><i
                                                        class="mdi mdi-email-outline font-18"></i></span>
                                                <span class="d-none d-sm-block">Linea de Investigacion</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#kid" data-toggle="tab" aria-expanded="false" class="nav-link">
                                                <span class="d-block d-sm-none"><i
                                                        class="mdi mdi-settings-outline font-18"></i></span>
                                                <span class="d-none d-sm-block">Kit de Apoyo</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#cuenta" data-toggle="tab" aria-expanded="false" class="nav-link">
                                                <span class="d-block d-sm-none"><i
                                                        class="mdi mdi-settings-outline font-18"></i></span>
                                                <span class="d-none d-sm-block">Cuenta</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane" id="inicio">
                                            <div class="col-xl-12 d-flex align-items-center justify-content-center">
                                                <div class="form-group col-md-3 text-center justify-content-center">

                                                    <div class="card card-block justify-content-center">
                                                        <div class="card-body">
                                                            <h5 class="card-title">Bienvenido Director</h5>
                                                            <img src="../assets/images/persona.png" width="100"
                                                                height="100">
                                                        </div>
                                                        <div class="card-body">
                                                            <h3>
                                                                <?php foreach($matrisRegistros as $matrizRegistro):?>
                                                                <?php echo $matrizRegistro['primer_nombre']; ?>
                                                                <?php echo $matrizRegistro['segundo_nombre']; ?>
                                                                <?php echo $matrizRegistro['primer_apellido']; ?>
                                                                <?php echo $matrizRegistro['segundo_apellido']; ?>
                                                                <?php endforeach;?>
                                                            </h3>
                                                            <p><a href="../modelo/cierre.php">Cierra sesion</a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane show active" id="proyecto">
                                            <div class="col-xl-12">
                                                <ul class="nav nav-pills navtab-bg nav-justified">
                                                    <li class="nav-item">
                                                        <a href="#realizados" data-toggle="tab" aria-expanded="false"
                                                            class="nav-link">
                                                            <span class="d-block d-sm-none"><i
                                                                    class="mdi mdi-home-variant-outline font-18"></i></span>
                                                            <span class="d-none d-sm-block">Proyectos Realizados</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#agregar" data-toggle="tab" aria-expanded="true"
                                                            class="nav-link active">
                                                            <span class="d-block d-sm-none"><i
                                                                    class="mdi mdi-account-outline font-18"></i></span>
                                                            <span class="d-none d-sm-block">Agregar Proyecto</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content">
                                                    <div class="tab-pane" id="realizados">
                                                        <section>
                                                            <div class="form-row">
                                                                <div class="col-md-12">
                                                                    <div class="card">
                                                                        <div class="card-body">
                                                                            <div class="table-responsive">
                                                                                <table class="table mb-0">
                                                                                    <thead class="thead-light">
                                                                                        <tr>
                                                                                            <th>Codigo</th>
                                                                                            <th>Nombre del proyecto</th>
                                                                                            <th>Grupo</th>
                                                                                            <th>GrupLac</th>
                                                                                            <th>Director</th>
                                                                                            <th>Investigador Principal
                                                                                            </th>
                                                                                            <th>Institucion</th>
                                                                                            <th>Estado</th>                                                                                
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <?php foreach($matrizverProyectos as $proyecta):?>
                                                                                            <tr>                                                                                                    
                                                                                                <td><?php echo $proyecta['id'];?></td>                                                                                                    
                                                                                                <td><?php echo $proyecta['nombre_proyecto'];?></td>
                                                                                                <td><?php echo $proyecta['nombreGrupo']; ?></td>
                                                                                                <td><?php echo $proyecta['url_grupLac'];?></td>
                                                                                                <td><?php echo $proyecta['nombre'];?></td>
                                                                                                <td><?php echo $proyecta['nomInvestigador'];?></td>
                                                                                                <td><?php echo $proyecta['nombre_universidad'];?></td>
                                                                                                <td><?php echo $proyecta['nombre_estado'];?></td>                                                                                                                                        
                                                                                            </tr>
                                                                                        <?php endforeach;?>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </section>
                                                    </div>
                                                    <div class="tab-pane show active" id="agregar">
                                                        <div class="col-xl-12">
                                                            <ul class="nav nav-pills navtab-bg nav-justified">
                                                                <li class="nav-item">
                                                                    <a href="#datos_grupo" data-toggle="tab"
                                                                        aria-expanded="false" class="nav-link">
                                                                        <span class="d-block d-sm-none"><i
                                                                                class="mdi mdi-home-variant-outline font-18"></i></span>
                                                                        <span class="d-none d-sm-block">Datos del
                                                                            Grupo</span>
                                                                    </a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a href="#datos_proyecto" data-toggle="tab"
                                                                        aria-expanded="true" class="nav-link active">
                                                                        <span class="d-block d-sm-none"><i
                                                                                class="mdi mdi-account-outline font-18"></i></span>
                                                                        <span class="d-none d-sm-block">Datos del
                                                                            Proyecto</span>
                                                                    </a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a href="#beneficiados_pro" data-toggle="tab"
                                                                        aria-expanded="false" class="nav-link">
                                                                        <span class="d-block d-sm-none"><i
                                                                                class="mdi mdi-email-outline font-18"></i></span>
                                                                        <span class="d-none d-sm-block">Beneficiados del
                                                                            Proyecto</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                            <div class="tab-content">
                                                                <div class="tab-pane" id="datos_grupo">
                                                                    <section>
                                                                        <div class="form-row">
                                                                            <div class="form-group col-md-6">
                                                                                <label for="name"
                                                                                    class="control-label">Nombre del
                                                                                    Investigador Principal</label>
                                                                                <input type="text"
                                                                                    class="required form-control"
                                                                                    id="name" name="nom_inves">
                                                                            </div>
                                                                            <div class="form-group col-md-6">
                                                                                <label for="name"
                                                                                    class="control-label">Telefono</label>
                                                                                <input type="number"
                                                                                    class="required form-control"
                                                                                    id="name" name="telefono">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-row">
                                                                            <div class="form-group col-md-6">
                                                                                <label for="name"
                                                                                    class="control-label">GrupLac
                                                                                    (URL)</label>
                                                                                <input type="text"
                                                                                    class="required form-control"
                                                                                    id="name" name="GrupUrl">
                                                                            </div>
                                                                            <div class="form-group col-md-6">
                                                                                <label for="name"
                                                                                    class="control-label">Email</label>
                                                                                <input type="text"
                                                                                    class="required form-control"
                                                                                    id="name" name="correo">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-row">
                                                                            <div class="form-group col-md-6">
                                                                                <label for="name"
                                                                                    class="control-label">Nombre de la
                                                                                    Universidad</label>
                                                                                <select class="form-control"
                                                                                    data-toggle="select2"
                                                                                    name="nomUniversidad">
                                                                                    <option>--Seleccione--</option>
                                                                                    <optgroup
                                                                                        label="Nombre de la Universidad">
                                                                                        <?php foreach($matrizUniversidades as $universidad):?>
                                                                                        <option
                                                                                            value="<?php echo $universidad['id']; ?>">
                                                                                            <?php echo $universidad['nombre_universidad']; ?>
                                                                                        </option>
                                                                                        <?php endforeach;?>
                                                                                    </optgroup>
                                                                                </select>
                                                                            </div>
                                                                            <div class="form-group col-md-6">
                                                                                <label for="name"
                                                                                    class="control-label">Facultad</label>
                                                                                <select class="form-control"
                                                                                    data-toggle="select2"
                                                                                    name="nomFacultad">
                                                                                    <option>--Seleccione--</option>
                                                                                    <optgroup label="Facultad">
                                                                                        <?php foreach($matrizFacultades as $facultad):?>
                                                                                        <option
                                                                                            value="<?php echo $facultad['id']; ?>">
                                                                                            <?php echo $facultad['nombre_facultad']; ?>
                                                                                        </option>
                                                                                        <?php endforeach;?>
                                                                                    </optgroup>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-row">
                                                                            <div class="form-group col-md-6">
                                                                                <label for="name"
                                                                                    class="control-label">Programas</label>
                                                                                <select class="form-control"
                                                                                    data-toggle="select2"
                                                                                    name="programas">
                                                                                    <option>--Seleccione--</option>
                                                                                    <optgroup label="Programas">
                                                                                        <?php foreach($matrizProgramas as $programa):?>
                                                                                        <option
                                                                                            value="<?php echo $programa['id']; ?>">
                                                                                            <?php echo $programa['nombre_programa']; ?>
                                                                                        </option>
                                                                                        <?php endforeach;?>
                                                                                    </optgroup>
                                                                                </select>
                                                                            </div>
                                                                            <div class="form-group col-md-6">
                                                                                <label for="name"
                                                                                    class="control-label">Grupo de
                                                                                    Investigacion</label>
                                                                                <select class="form-control"
                                                                                    data-toggle="select2"
                                                                                    name="Grupo_investigacion">
                                                                                    <option>--Seleccione--</option>
                                                                                    <optgroup
                                                                                        label="Grupo de Investigacion">
                                                                                        <?php foreach($matrizgruposInvestigciones as $grupoInvestigacion):?>
                                                                                        <option
                                                                                            value="<?php echo $grupoInvestigacion['id']; ?>">
                                                                                            <?php echo $grupoInvestigacion['nombre_GrupoInves']; ?>
                                                                                        </option>
                                                                                        <?php endforeach;?>
                                                                                    </optgroup>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-row">
                                                                            <div class="form-group col-md-6">
                                                                                <label for="name"
                                                                                    class="control-label">Categoria
                                                                                    del Grupo</label>
                                                                                <select class="form-control"
                                                                                    data-toggle="select2"
                                                                                    name="cateGrupo">
                                                                                    <option>--Seleccione--</option>
                                                                                    <optgroup
                                                                                        label="Categoria del Grupo">
                                                                                        <?php foreach($matrizCategoriaGrupos as $CategoriaGrupo):?>
                                                                                        <option
                                                                                            value="<?php echo $CategoriaGrupo['id']; ?>">
                                                                                            <?php echo $CategoriaGrupo['nombre_categoria']; ?>
                                                                                        </option>
                                                                                        <?php endforeach;?>
                                                                                    </optgroup>
                                                                                </select>
                                                                            </div>
                                                                            <div class="form-group col-md-6">
                                                                                <label for="name"
                                                                                    class="control-label">Grandes
                                                                                    Areas del Conocimiento</label>
                                                                                <select class="form-control"
                                                                                    data-toggle="select2"
                                                                                    name="GranAreaConoci">
                                                                                    <option>--Seleccione--</option>
                                                                                    <optgroup
                                                                                        label="Grandes Areas del Conocimiento">
                                                                                        <?php foreach($matrizGrandesAreasConocimientos as $granareaconocimiento):?>
                                                                                        <option
                                                                                            value="<?php echo $granareaconocimiento['id']; ?>">
                                                                                            <?php echo $granareaconocimiento['nombre_GranArea']; ?>
                                                                                        </option>
                                                                                        <?php endforeach;?>
                                                                                    </optgroup>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-row">
                                                                            <div class="form-group col-md-6">
                                                                                <label for="name"
                                                                                    class="control-label">Areas del
                                                                                    conocimiento</label>
                                                                                <select class="form-control"
                                                                                    data-toggle="select2"
                                                                                    name="area_conocimiento">
                                                                                    <option>--Seleccione--</option>
                                                                                    <optgroup
                                                                                        label="Areas del conocimiento">
                                                                                        <?php foreach($matrizAreasConocimientos as $areaconocimiento):?>
                                                                                        <option
                                                                                            value="<?php echo $areaconocimiento['id']; ?>">
                                                                                            <?php echo $areaconocimiento['nombre_AreaCono']; ?>
                                                                                        </option>
                                                                                        <?php endforeach;?>
                                                                                    </optgroup>
                                                                                </select>
                                                                            </div>
                                                                            <div class="form-group col-md-6">
                                                                                <label for="name"
                                                                                    class="control-label">Departamento</label>
                                                                                <select class="form-control"
                                                                                    data-toggle="select2"
                                                                                    name="departamento">
                                                                                    <option>--Seleccione--</option>
                                                                                    <optgroup label="Departamento">
                                                                                        <?php foreach($matrizDepartamentos as $departamento):?>
                                                                                        <option
                                                                                            value="<?php echo $departamento['id']; ?>">
                                                                                            <?php echo $departamento['nombre_departamento']; ?>
                                                                                        </option>
                                                                                        <?php endforeach;?>
                                                                                    </optgroup>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-row">
                                                                            <div class="form-group col-md-6">
                                                                                <label for="name"
                                                                                    class="control-label">Municipio</label>
                                                                                <select class="form-control"
                                                                                    data-toggle="select2"
                                                                                    name="municipio">
                                                                                    <option>--Seleccione--</option>
                                                                                    <optgroup label="Departamento">
                                                                                        <?php foreach($matrizMunicipios as $municipio):?>
                                                                                        <option
                                                                                            value="<?php echo $municipio['id']; ?>">
                                                                                            <?php echo $municipio['nombre_municipio']; ?>
                                                                                        </option>
                                                                                        <?php endforeach;?>
                                                                                    </optgroup>
                                                                                </select>
                                                                            </div>
                                                                            <div class="form-group col-md-6">
                                                                                <label for="name"
                                                                                    class="control-label">Investigador
                                                                                    Principal</label>
                                                                                <select class="form-control"
                                                                                    data-toggle="select2"
                                                                                    name="invetigaPrincipal">
                                                                                    <option>--Seleccione--</option>
                                                                                    <optgroup
                                                                                        label="Investigador Principal">
                                                                                        <?php foreach($matrizPrincipales as $Principal):?>
                                                                                        <option
                                                                                            value="<?php echo $Principal['id']; ?>">
                                                                                            <?php echo $Principal['nombre']; ?>
                                                                                        </option>
                                                                                        <?php endforeach;?>
                                                                                    </optgroup>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </section>
                                                                </div>
                                                                <div class="tab-pane show active" id="datos_proyecto">
                                                                    <section>
                                                                        <div class="form-row">
                                                                            <div class="form-group col-md-6">
                                                                                <label for="name"
                                                                                    class="control-label">Nombre del
                                                                                    Proyecto</label>
                                                                                <input type="text"
                                                                                    class="required form-control"
                                                                                    id="name" name="nomPro">
                                                                            </div>
                                                                            <div class="form-group col-md-6">
                                                                                <label for="name"
                                                                                    class="control-label">Nombre del
                                                                                    Grupo</label>
                                                                                <input type="text"
                                                                                    class="required form-control"
                                                                                    id="name" name="nomGru">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-row">
                                                                            <div class="form-group col-md-6">
                                                                                <label for="name"
                                                                                    class="control-label">Lineas
                                                                                    Estrategicas</label>
                                                                                <select class="form-control"
                                                                                    data-toggle="select2"
                                                                                    name="lineaEstra">
                                                                                    <option>--Seleccione--</option>
                                                                                    <optgroup
                                                                                        label="Lineas Estrategicas">
                                                                                        <?php foreach($matrizlineasEstrategicas as $lineaEtrategica):?>
                                                                                        <option
                                                                                            value="<?php echo $lineaEtrategica['id']; ?>">
                                                                                            <?php echo $lineaEtrategica['nombre_estrategica']; ?>
                                                                                        </option>
                                                                                        <?php endforeach;?>
                                                                                    </optgroup>
                                                                                </select>
                                                                            </div>
                                                                            <div class="form-group col-md-6">
                                                                                <label for="name"
                                                                                    class="control-label">Alcance
                                                                                    Tematico</label>
                                                                                <select class="form-control"
                                                                                    data-toggle="select2"
                                                                                    name="alcanceTema">
                                                                                    <option>--Seleccione--</option>
                                                                                    <optgroup label="Alcance Tematico">
                                                                                        <?php foreach($matrizAlcancesTematicos as $alcanceTematico):?>
                                                                                        <option
                                                                                            value="<?php echo $alcanceTematico['id']; ?>">
                                                                                            <?php echo $alcanceTematico['nombre_tematico']; ?>
                                                                                        </option>
                                                                                        <?php endforeach;?>
                                                                                    </optgroup>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-row">
                                                                            <div class="form-group col-md-6">
                                                                                <label for="name"
                                                                                    class="control-label">Problema
                                                                                    Central</label>
                                                                                <div>
                                                                                    <textarea required
                                                                                        class="form-control"
                                                                                        name="central"></textarea>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group col-md-6">
                                                                                <label for="name"
                                                                                    class="control-label">Objetivo
                                                                                    General</label>
                                                                                <div>
                                                                                    <textarea required
                                                                                        class="form-control"
                                                                                        name="general"></textarea>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-row">
                                                                            <div class="form-group col-md-12">
                                                                                <label for="name"
                                                                                    class="control-label">Objetivos
                                                                                    Especificos</label>
                                                                                <div>
                                                                                    <textarea required
                                                                                        class="form-control"
                                                                                        name="especifico"></textarea>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-row">
                                                                            <div class="form-group col-md-12">
                                                                                <label for="name"
                                                                                    class="control-label">Justificacion</label>
                                                                                <div>
                                                                                    <textarea required
                                                                                        class="form-control"
                                                                                        name="justificacion"></textarea>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-row">
                                                                            <div class="form-group col-md-12">
                                                                                <label for="name"
                                                                                    class="control-label">Decripcion
                                                                                    del Proyecto</label>
                                                                                <div>
                                                                                    <textarea required
                                                                                        class="form-control"
                                                                                        name="descriPro"></textarea>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-row">
                                                                            <div class="form-group col-md-12">
                                                                                <label for="name"
                                                                                    class="control-label">Resumen</label>
                                                                                <div>
                                                                                    <textarea required
                                                                                        class="form-control"
                                                                                        name="resumen"></textarea>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-row">
                                                                            <div class="form-group col-md-3">
                                                                                <label class="control-label"
                                                                                    for="name">Anexo
                                                                                    (5MB)</label>
                                                                                <div>
                                                                                    <input type="file"
                                                                                        class="form-control"
                                                                                        id="example-fileinput"
                                                                                        name="anexo">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group col-md-3">
                                                                                <label for="name"
                                                                                    class="control-label">Presupuesto
                                                                                    Estimado</label>
                                                                                <input type="number"
                                                                                    class="required form-control"
                                                                                    id="name" name="presuEstimado">
                                                                            </div>
                                                                            <div class="form-group col-md-3">
                                                                                <label for="name"
                                                                                    class="control-label">Estado del
                                                                                    Proyecto</label>
                                                                                <select class="form-control"
                                                                                    data-toggle="select2"
                                                                                    name="estadoPro">
                                                                                    <option>--Seleccione--</option>
                                                                                    <optgroup
                                                                                        label="Estado del Proyecto">
                                                                                        <?php foreach($matrizEstadosProyectos as $estadoProyecto):?>
                                                                                        <option
                                                                                            value="<?php echo $estadoProyecto['id']; ?>">
                                                                                            <?php echo $estadoProyecto['nombre_estado']; ?>
                                                                                        </option>
                                                                                        <?php endforeach;?>
                                                                                    </optgroup>
                                                                                </select>
                                                                            </div>
                                                                            <div class="form-group col-md-3">
                                                                                <label for="name"
                                                                                    class="control-label">Cronograma
                                                                                    de duracion</label>
                                                                                <input type="number"
                                                                                    class="required form-control"
                                                                                    id="name" name="cronoDuracion">
                                                                            </div>
                                                                        </div>
                                                                    </section>
                                                                </div>
                                                                <div class="tab-pane" id="beneficiados_pro">
                                                                    <div class="col-xl-12">
                                                                        <ul
                                                                            class="nav nav-pills navtab-bg nav-justified">
                                                                            <li class="nav-item">
                                                                                <a href="#agregarBene" data-toggle="tab"
                                                                                    aria-expanded="false"
                                                                                    class="nav-link">
                                                                                    <span class="d-block d-sm-none"><i
                                                                                            class="mdi mdi-home-variant-outline font-18"></i></span>
                                                                                    <span
                                                                                        class="d-none d-sm-block">Agregar
                                                                                        Nuevo
                                                                                        Beneficiado</span>
                                                                                </a>
                                                                            </li>                                                        
                                                                        </ul>
                                                                        <div class="tab-content">
                                                                            <div class="tab-pane" id="agregarBene">
                                                                                <div class="form-row">
                                                                                    <div class="form-group col-md-6">
                                                                                        <label for="name"
                                                                                            class="control-label">Departamento</label>
                                                                                        <select class="form-control"
                                                                                            data-toggle="select2"
                                                                                            name="departamento_bene">
                                                                                            <option>--Seleccione--
                                                                                            </option>
                                                                                            <optgroup
                                                                                                label="Departamento">
                                                                                                <?php foreach($matrizDepartamentos as $departamento):?>
                                                                                                <option
                                                                                                    value="<?php echo $departamento['id']; ?>">
                                                                                                    <?php echo $departamento['nombre_departamento']; ?>
                                                                                                </option>
                                                                                                <?php endforeach;?>
                                                                                            </optgroup>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="form-group col-md-6">
                                                                                        <label for="name"
                                                                                            class="control-label">Municipio</label>
                                                                                        <select class="form-control"
                                                                                            data-toggle="select2"
                                                                                            name="municipio_bene">
                                                                                            <option>--Seleccione--
                                                                                            </option>
                                                                                            <optgroup
                                                                                                label="Departamento">
                                                                                                <?php foreach($matrizMunicipios as $municipio):?>
                                                                                                <option
                                                                                                    value="<?php echo $municipio['id']; ?>">
                                                                                                    <?php echo $municipio['nombre_municipio']; ?>
                                                                                                </option>
                                                                                                <?php endforeach;?>
                                                                                            </optgroup>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-row">
                                                                                    <div class="form-group col-md-6">
                                                                                        <label for="name"
                                                                                            class="control-label">Tipo
                                                                                            de poblacion</label>
                                                                                        <select class="form-control"
                                                                                            data-toggle="select2"
                                                                                            name="tipPoblacion">
                                                                                            <option>--Seleccione--
                                                                                            </option>
                                                                                            <optgroup
                                                                                                label="Tipo de poblacion">
                                                                                                <?php foreach($matrizTiposPoblaciones as $tipoPoblacion):?>
                                                                                                <option
                                                                                                    value="<?php echo $tipoPoblacion['id']; ?>">
                                                                                                    <?php echo $tipoPoblacion['nombre']; ?>
                                                                                                </option>
                                                                                                <?php endforeach;?>
                                                                                            </optgroup>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="form-group col-md-6">
                                                                                        <label for="name"
                                                                                            class="control-label">No
                                                                                            de Afectados</label>
                                                                                        <input type="number"
                                                                                            class="required form-control"
                                                                                            id="name"
                                                                                            name="numAfectados">
                                                                                    </div>
                                                                                </div>

                                                                                <div class="form-row">
                                                                                    <div
                                                                                        class="form-group col-md-12 d-flex justify-content-center">
                                                                                        <button type="submit" name="hr"
                                                                                            id="hr"
                                                                                            class="btn btn-primary waves-effect waves-light btn-lg">Regitrar
                                                                                            Proyecto</button>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-row">
                                                                                    <div class="table-responsive">
                                                                                        <table class="table mb-0">
                                                                                            <thead class="thead-dark">
                                                                                                <tr>
                                                                                                    <th>Departamento
                                                                                                    </th>
                                                                                                    <th>Municipio</th>
                                                                                                    <th>Tipo de
                                                                                                        Poblacion</th>
                                                                                                    <th>No de Afectados
                                                                                                    </th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                            <tbody>
                                                                                                <?php foreach($matrizproyectos as $proyecto):?>
                                                                                                    <tr>                                                                                                    
                                                                                                        <td><?php echo $proyecto['nombre_departamento'];?></td>                                                                                                    
                                                                                                        <td><?php echo $proyecto['nombre_municipio'];?></td>
                                                                                                        <td><?php echo $proyecto['nombre_Pobla']; ?></td>
                                                                                                        <td><?php echo $proyecto['numAfectados'];?></td>                                                                                      
                                                                                                    </tr>
                                                                                                <?php endforeach;?>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </div>
                                                                                </div>
                                                                            </div>                                                                        
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="linea">
                                            <div class="col-xl-12">
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for="name" class="control-label">Areas de
                                                            investigacion</label>
                                                        <select class="form-control" data-toggle="select2" name="pais">
                                                            <option>--Seleccione--</option>
                                                            <optgroup label="Programas">
                                                                <?php foreach($matrizLineasInvestigaciones as $LineaInvestigacion):?>
                                                                <option
                                                                    value="<?php echo $LineaInvestigacion['id']; ?>">
                                                                    <?php echo $LineaInvestigacion['nombre']; ?>
                                                                </option>
                                                                <?php endforeach;?>
                                                            </optgroup>
                                                        </select>
                                                    </div>
                                                    <!--
                                                    <div class="form-group col-md-4 d-flex justify-content-end">
                                                        <button type="button"
                                                            class="btn btn-primary waves-effect waves-light btn-lg">Elija
                                                            sus areas
                                                            de investigacion</button>
                                                    </div>
                                                    -->
                                                    <div class="form-group col-md-6 d-flex justify-content-center">
                                                        <p class="text-muted mb-0">Quieres agregar una nueva Linea de
                                                            investigacion?
                                                            <a href="../controlador/LineaInvestigacion_controlador.php"
                                                                class="text-dark m-l-5"><b>Crear</b></a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="kid">
                                            <div
                                                class="col-xl-12 col-sm-6 d-flex align-items-center justify-content-center ">
                                                <div class="card bg-success">
                                                    <div class="card-body text-center">
                                                        <div class="h2 mt-2 text-white"><img
                                                                src="../assets/images/llave.png" height="50"
                                                                alt="mdb logo">
                                                        </div>
                                                        <span class="mb-2 text-white">Sitio en Construccíon</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="cuenta">
                                            <div class="col-xl-12">
                                                <div class="form-row">
                                                    <div class="form-group col-md-3">
                                                        <label for="name" class="control-label">Primer Nombre</label>
                                                        <?php foreach($matrisRegistros as $matrizRegistro):?>
                                                        <input type="text" class="form-control " disabled=""
                                                            value="<?php echo $matrizRegistro['primer_nombre']; ?>">
                                                        <?php endforeach;?>
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="name" class="control-label">Segundo Nombre</label>
                                                        <?php foreach($matrisRegistros as $matrizRegistro):?>
                                                        <input type="text" class="form-control " id="name"
                                                            name="nom_dos" disabled=""
                                                            value="<?php echo $matrizRegistro['segundo_nombre'];?>">
                                                        <?php endforeach;?>
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="name" class="control-label">Primer Apellido</label>
                                                        <?php foreach($matrisRegistros as $matrizRegistro):?>
                                                        <input type="text" class="form-control " id="name"
                                                            name="nom_dos" disabled=""
                                                            value="<?php echo $matrizRegistro['primer_apellido'];?>">
                                                        <?php endforeach;?>
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="name" class="control-label">Segundo Apellido</label>
                                                        <?php foreach($matrisRegistros as $matrizRegistro):?>
                                                        <input type="text" class="form-control " id="name"
                                                            name="nom_dos" disabled=""
                                                            value="<?php echo $matrizRegistro['segundo_apellido'];?>">
                                                        <?php endforeach;?>
                                                    </div>
                                                </div>

                                                <div class="form-row">
                                                    <div class="form-group col-md-3">
                                                        <label for="name" class="control-label">Nacionalidad</label>
                                                        <?php foreach($matrisRegistros as $matrizRegistro):?>
                                                        <input type="text" class="form-control " id="name"
                                                            name="nom_uno" disabled=""
                                                            value="<?php echo $matrizRegistro['nombre_pais']; ?>">
                                                        <?php endforeach;?>
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="name" class="control-label">Departamento</label>
                                                        <?php foreach($matrisRegistros as $matrizRegistro):?>
                                                        <input type="text" class="form-control " id="name"
                                                            name="nom_dos" disabled=""
                                                            value="<?php echo $matrizRegistro['nombre_departamento'];?>">
                                                        <?php endforeach;?>
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="name" class="control-label">Municipio</label>
                                                        <?php foreach($matrisRegistros as $matrizRegistro):?>
                                                        <input type="text" class="form-control " id="name"
                                                            name="nom_dos" disabled=""
                                                            value="<?php echo $matrizRegistro['nombre_municipio'];?>">
                                                        <?php endforeach;?>
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="name" class="control-label">Fecha de
                                                            Nacimiento</label>
                                                        <?php foreach($matrisRegistros as $matrizRegistro):?>
                                                        <input type="text" class="form-control " id="name"
                                                            name="nom_dos" disabled=""
                                                            value="<?php echo $matrizRegistro['fecha_nacimiento'];?>">
                                                        <?php endforeach;?>
                                                    </div>
                                                </div>

                                                <div class="form-row">
                                                    <div class="form-group col-md-3">
                                                        <label for="name" class="control-label">Tipo de
                                                            documento</label>
                                                        <?php foreach($matrisRegistros as $matrizRegistro):?>
                                                        <input type="text" class="form-control " id="name"
                                                            name="nom_uno" disabled=""
                                                            value="<?php echo $matrizRegistro['nombre_documento']; ?>">
                                                        <?php endforeach;?>
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="name" class="control-label">Numero de
                                                            identificacion</label>
                                                        <?php foreach($matrisRegistros as $matrizRegistro):?>
                                                        <input type="text" class="form-control " id="name"
                                                            name="nom_dos" disabled=""
                                                            value="<?php echo $matrizRegistro['numero_de_documento'];?>">
                                                        <?php endforeach;?>
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="name" class="control-label">Fecha de
                                                            expedicion</label>
                                                        <?php foreach($matrisRegistros as $matrizRegistro):?>
                                                        <input type="text" class="form-control " id="name"
                                                            name="nom_dos" disabled=""
                                                            value="<?php echo $matrizRegistro['fecha_expedicion_documento'];?>">
                                                        <?php endforeach;?>
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="name" class="control-label">Lugar de
                                                            expedicion</label>
                                                        <?php foreach($matrisRegistros as $matrizRegistro):?>
                                                        <input type="text" class="form-control " id="name"
                                                            name="nom_dos" disabled=""
                                                            value="<?php echo $matrizRegistro['nombre_municipio']; echo " - "; echo $matrizRegistro['nombre_departamento'];?>">
                                                        <?php endforeach;?>
                                                    </div>
                                                </div>

                                                <div class="form-row">
                                                    <div class="form-group col-md-3">
                                                        <label for="name" class="control-label">Sexo</label>
                                                        <?php foreach($matrisRegistros as $matrizRegistro):?>
                                                        <input type="text" class="form-control " id="name"
                                                            name="nom_uno" disabled=""
                                                            value="<?php echo $matrizRegistro['nombre_sexo']; ?>">
                                                        <?php endforeach;?>
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="name" class="control-label">Estado civil</label>
                                                        <?php foreach($matrisRegistros as $matrizRegistro):?>
                                                        <input type="text" class="form-control " id="name"
                                                            name="nom_dos" disabled=""
                                                            value="<?php echo $matrizRegistro['nombre_civil'];?>">
                                                        <?php endforeach;?>
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="name" class="control-label">Numero de
                                                            contacto</label>
                                                        <?php foreach($matrisRegistros as $matrizRegistro):?>
                                                        <input type="text" class="form-control " id="name"
                                                            name="nom_dos" disabled=""
                                                            value="<?php echo $matrizRegistro['telefono'];?>">
                                                        <?php endforeach;?>
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="name" class="control-label">Correo Electronico
                                                            Institucional</label>
                                                        <?php foreach($matrisRegistros as $matrizRegistro):?>
                                                        <input type="text" class="form-control " id="name"
                                                            name="nom_dos" disabled=""
                                                            value="<?php echo $matrizRegistro['correo_institucional'];?>">
                                                        <?php endforeach;?>
                                                    </div>
                                                </div>

                                                <div class="form-row">
                                                    <div class="form-group col-md-3">
                                                        <label for="name" class="control-label">Correo Electronico
                                                            Personal</label>
                                                        <?php foreach($matrisRegistros as $matrizRegistro):?>
                                                        <input type="text" class="form-control " id="name"
                                                            name="nom_uno" disabled=""
                                                            value="<?php echo $matrizRegistro['correo_personal']; ?>">
                                                        <?php endforeach;?>
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="name" class="control-label">Nombre en Citas
                                                            Bibliograficas</label>
                                                        <?php foreach($matrisRegistros as $matrizRegistro):?>
                                                        <input type="text" class="form-control " id="name"
                                                            name="nom_dos" disabled=""
                                                            value="<?php echo $matrizRegistro['nombre_bibliografico'];?>">
                                                        <?php endforeach;?>
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="name" class="control-label">Tipo de
                                                            Investigador</label>
                                                        <?php foreach($matrisRegistros as $matrizRegistro):?>
                                                        <input type="text" class="form-control " id="name" name=""
                                                            disabled=""
                                                            value="<?php echo $matrizRegistro['nombre_investigador'];?>">
                                                        <?php endforeach;?>
                                                    </div>
                                                </div>

                                                <div class="form-row">
                                                    <div class="form-group col-md-12 d-flex justify-content-center">
                                                        <a href="../controlador/actualizar_controlador.php" class="btn btn-primary waves-effect waves-light btn-lg">Actualizar Cuenta</a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Vendor js -->
        <script src="../assets/js/vendor.min.js"></script>

        <!--Form Wizard-->
        <script src="../assets/libs/jquery-steps/jquery.steps.min.js"></script>

        <!-- Init js-->
        <script src="../assets/js/pages/form-wizard.init.js"></script>
        <script src="../assets/js/pages/form-advanced.init.js"></script>

        <!-- App js -->
        <script src="../assets/js/app.min.js"></script>

        <!-- Plugins Js -->
        <script src="../assets/libs/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
        <script src="../assets/libs/switchery/switchery.min.js"></script>
        <script src="../assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
        <script src="../assets/libs/jquery-mask-plugin/jquery.mask.min.js"></script>
        <script src="../assets/libs/moment/moment.min.js"></script>
        <script src="../assets/libs/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
        <script src="../assets/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.js"></script>
        <script src="../assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>

</body>

</html>
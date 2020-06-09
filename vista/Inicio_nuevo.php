<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8" />
        <title>Tabs & Accordions | Velonic - Responsive Bootstrap 4 Admin Dashboard</title>
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
        session_start();
        if(!isset($_SESSION["usuario"])){
            header("location:Login_nuevo.php");
        }        
    ?>
    <div class="row d-flex justify-content-center account-pages">
        <div class="col-md-10 account-pages my-5">
            <div class="card">        
                <div class="card-header text-center p-4 bg-primary">
                    <h4 class="text-white mb-0 mt-0">Gobernacion de Nariño</h4>
                    <h5 class="text-white font-13 mb-0">Inicio</h5>
                </div>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">                    
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a href="#inicio" data-toggle="tab" aria-expanded="false" class="nav-link">
                                    <span class="d-block d-sm-none"><i class="mdi mdi-home-variant-outline font-18"></i></span>
                                    <span class="d-none d-sm-block">Inicio</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#proyecto" data-toggle="tab" aria-expanded="true" class="nav-link active">
                                    <span class="d-block d-sm-none"><i class="mdi mdi-account-outline font-18"></i></span>
                                    <span class="d-none d-sm-block">Proyecto</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#linea" data-toggle="tab" aria-expanded="false" class="nav-link">
                                    <span class="d-block d-sm-none"><i class="mdi mdi-email-outline font-18"></i></span>
                                    <span class="d-none d-sm-block">Linea de Investigacion</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#kid" data-toggle="tab" aria-expanded="false" class="nav-link">
                                    <span class="d-block d-sm-none"><i class="mdi mdi-settings-outline font-18"></i></span>
                                    <span class="d-none d-sm-block">Kid de Apoyo</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#cuenta" data-toggle="tab" aria-expanded="false" class="nav-link">
                                    <span class="d-block d-sm-none"><i class="mdi mdi-settings-outline font-18"></i></span>
                                    <span class="d-none d-sm-block">Cuenta</span>
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content">                                                
                            <div class="tab-pane" id="inicio">                        
                                <div class="col-xl-12">
                                    <div class="form-group col-md-6">
                                        <label for="name" class="control-label">LE DAMOS LA BIENVENIDA DIRECTOR/A</label>
                                        <input type="text" class="required form-control" disabled="" value="<?php echo $_SESSION["usuario"];  ?>">
                                    </div>                                                                    
                                </div>
                            </div>
                            <div class="tab-pane show active" id="proyecto">
                                <div class="col-xl-12">                                
                                    <ul class="nav nav-pills navtab-bg nav-justified">
                                        <li class="nav-item">
                                            <a href="#realizados" data-toggle="tab" aria-expanded="false" class="nav-link">
                                                <span class="d-block d-sm-none"><i class="mdi mdi-home-variant-outline font-18"></i></span>
                                                <span class="d-none d-sm-block">Proyectos Realizados</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#agregar" data-toggle="tab" aria-expanded="true" class="nav-link active">
                                                <span class="d-block d-sm-none"><i class="mdi mdi-account-outline font-18"></i></span>
                                                <span class="d-none d-sm-block">Agregar Proyecto</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane" id="realizados">
                                        <section>
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <label for="name" class="control-label">Nombre de la Universidad</label>
                                                    <select class="form-control" data-toggle="select2" name="pais">
                                                        <option>Select</option>
                                                        <optgroup label="Nombre de la Universidad">
                                                            <?php foreach($matrizUniversidades as $universidad):?>
                                                                <option value="<?php echo $universidad['id']; ?>"><?php echo $universidad['nombre']; ?></option>
                                                            <?php endforeach;?>                                                    
                                                        </optgroup>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="name" class="control-label">Departamento</label>
                                                    <select class="form-control" data-toggle="select2" name="departamento">
                                                        <option>Select</option>
                                                        <optgroup label="Departamento">
                                                            <?php foreach($matrizDepartamentos as $departamento):?>
                                                                <option value="<?php echo $departamento['id']; ?>"><?php echo $departamento['nombre']; ?></option>
                                                            <?php endforeach;?>                                                    
                                                        </optgroup>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="name" class="control-label">Grandes Areas del Conocimiento</label>
                                                    <select class="form-control" data-toggle="select2" name="municipio">
                                                        <option>Select</option>
                                                        <optgroup label="Grandes Areas del Conocimiento">
                                                            <?php foreach($matrizGrandesAreasConocimientos as $granareaconocimiento):?>
                                                                <option value="<?php echo $granareaconocimiento['id']; ?>"><?php echo $granareaconocimiento['nombre']; ?></option> 
                                                            <?php endforeach;?>                                                   
                                                        </optgroup>
                                                    </select>
                                                </div>                    
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <label for="name" class="control-label">Facultad</label>
                                                    <select class="form-control" data-toggle="select2" name="pais">
                                                        <option>Select</option>
                                                        <optgroup label="Facultad">
                                                            <?php foreach($matrizFacultades as $facultad):?>
                                                                <option value="<?php echo $facultad['id']; ?>"><?php echo $facultad['nombre']; ?></option>
                                                            <?php endforeach;?>                                                     
                                                        </optgroup>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="name" class="control-label">Categoria del Grupo</label>
                                                    <select class="form-control" data-toggle="select2" name="departamento">
                                                        <option>Select</option>
                                                        <optgroup label="Categoria del Grupo">
                                                            <?php foreach($matrizCategoriaGrupos as $CategoriaGrupo):?>
                                                                <option value="<?php echo $CategoriaGrupo['id']; ?>"><?php echo $CategoriaGrupo['nombre']; ?></option>
                                                            <?php endforeach;?>                                                    
                                                        </optgroup>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="name" class="control-label">Areas del conocimiento</label>
                                                    <select class="form-control" data-toggle="select2" name="municipio">
                                                        <option>Select</option>
                                                        <optgroup label="Areas del conocimiento">
                                                            <?php foreach($matrizAreasConocimientos as $areaconocimiento):?>
                                                                <option value="<?php echo $areaconocimiento['id']; ?>"><?php echo $areaconocimiento['nombre']; ?></option> 
                                                            <?php endforeach;?>                                                   
                                                        </optgroup>
                                                    </select>
                                                </div>                    
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <label for="name" class="control-label">Programas</label>
                                                    <select class="form-control" data-toggle="select2" name="pais">
                                                        <option>Select</option>
                                                        <optgroup label="Programas">
                                                            <?php foreach($matrizProgramas as $programa):?>
                                                                <option value="<?php echo $programa['id']; ?>"><?php echo $programa['nombre']; ?></option>
                                                            <?php endforeach;?>                                                    
                                                        </optgroup>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="name" class="control-label">Grupo de Investigacion</label>
                                                    <select class="form-control" data-toggle="select2" name="departamento">
                                                        <option>Select</option>
                                                        <optgroup label="Grupo de Investigacion">
                                                            <?php foreach($matrizgruposInvestigciones as $grupoInvestigacion):?>
                                                                <option value="<?php echo $grupoInvestigacion['id']; ?>"><?php echo $grupoInvestigacion['nombre']; ?></option>
                                                            <?php endforeach;?>                                                    
                                                        </optgroup>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-4 d-flex justify-content-end">
                                                    <button type="button" class="btn btn-primary waves-effect waves-light btn-lg">Buscar</button>
                                                </div>                    
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-12">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="table-responsive">
                                                                <table class="table mb-0">
                                                                    <thead class="thead-light">
                                                                        <tr>
                                                                            <th>#</th>
                                                                            <th>Codigo</th>
                                                                            <th>Nombre del proyecto</th>
                                                                            <th>Grupo</th>
                                                                            <th>GrupLac</th>
                                                                            <th>Director</th>
                                                                            <th>Investigador Principal</th>
                                                                            <th>Institucion</th>
                                                                            <th>Estado</th>
                                                                            <th>Detalles</th>
                                                                            <th>Acciones</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <th scope="row">1</th>
                                                                            <td>Mark</td>
                                                                            <td>Otto</td>
                                                                            <td>@mdo</td>
                                                                            <td>Mark</td>
                                                                            <td>Otto</td>
                                                                            <td>@mdo</td>
                                                                            <td>Otto</td>
                                                                            <td>@mdo</td>
                                                                            <td>Mark</td>
                                                                            <td>Otto</td>                                                            
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">2</th>
                                                                            <td>Jacob</td>
                                                                            <td>Thornton</td>
                                                                            <td>@fat</td>
                                                                            <td>Jacob</td>
                                                                            <td>Thornton</td>
                                                                            <td>@fat</td>
                                                                            <td>Jacob</td>
                                                                            <td>Thornton</td>
                                                                            <td>@fat</td>
                                                                            <td>@fat</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">3</th>
                                                                            <td>Larry</td>
                                                                            <td>the Bird</td>
                                                                            <td>@twitter</td>
                                                                            <td>Larry</td>
                                                                            <td>the Bird</td>
                                                                            <td>@twitter</td>
                                                                            <td>Larry</td>
                                                                            <td>the Bird</td>
                                                                            <td>@twitter</td>
                                                                            <td>@twitter</td>
                                                                        </tr>
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
                                                            <a href="#datos_grupo" data-toggle="tab" aria-expanded="false" class="nav-link">
                                                                <span class="d-block d-sm-none"><i class="mdi mdi-home-variant-outline font-18"></i></span>
                                                                <span class="d-none d-sm-block">Datos del Grupo</span>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="#datos_proyecto" data-toggle="tab" aria-expanded="true" class="nav-link active">
                                                                <span class="d-block d-sm-none"><i class="mdi mdi-account-outline font-18"></i></span>
                                                                <span class="d-none d-sm-block">Datos del Proyecto</span>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="#beneficiados_pro" data-toggle="tab" aria-expanded="false" class="nav-link">
                                                                <span class="d-block d-sm-none"><i class="mdi mdi-email-outline font-18"></i></span>
                                                                <span class="d-none d-sm-block">Beneficiados del Proyecto</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <div class="tab-content">
                                                        <div class="tab-pane" id="datos_grupo">
                                                            <section>
                                                                <div class="form-row">
                                                                    <div class="form-group col-md-6">
                                                                        <label for="name" class="control-label">Nombre del Investigador Principal</label>
                                                                        <input type="text" class="required form-control" id="name" name="nom_inves">
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label for="name" class="control-label">Telefono</label>
                                                                        <input type="number" class="required form-control" id="name" name="telefono">
                                                                    </div>
                                                                </div>
                                                                <div class="form-row">
                                                                    <div class="form-group col-md-6">
                                                                        <label for="name" class="control-label">GrupLac (URL)</label>
                                                                        <input type="text" class="required form-control" id="name" name="GrupUrl">
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label for="name" class="control-label">Email</label>
                                                                        <input type="text" class="required form-control" id="name" name="correo">
                                                                    </div>
                                                                </div>
                                                                <div class="form-row">
                                                                    <div class="form-group col-md-6">
                                                                        <label for="name" class="control-label">Nombre de la Universidad</label>
                                                                        <select class="form-control" data-toggle="select2" name="nomUniversidad">
                                                                            <option>Select</option>
                                                                            <optgroup label="Nombre de la Universidad">
                                                                                <?php foreach($matrizUniversidades as $universidad):?>
                                                                                    <option value="<?php echo $universidad['id']; ?>"><?php echo $universidad['nombre']; ?></option>
                                                                                <?php endforeach;?>                                                    
                                                                            </optgroup>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label for="name" class="control-label">Facultad</label>
                                                                        <select class="form-control" data-toggle="select2" name="nomFacultad">
                                                                            <option>Select</option>
                                                                            <optgroup label="Facultad">
                                                                                <?php foreach($matrizFacultades as $facultad):?>
                                                                                    <option value="<?php echo $facultad['id']; ?>"><?php echo $facultad['nombre']; ?></option>
                                                                                <?php endforeach;?>                                                     
                                                                            </optgroup>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="form-row">
                                                                    <div class="form-group col-md-6">
                                                                        <label for="name" class="control-label">Programas</label>
                                                                        <select class="form-control" data-toggle="select2" name="programas">
                                                                            <option>Select</option>
                                                                            <optgroup label="Programas">
                                                                                <?php foreach($matrizProgramas as $programa):?>
                                                                                    <option value="<?php echo $programa['id']; ?>"><?php echo $programa['nombre']; ?></option>
                                                                                <?php endforeach;?>                                                    
                                                                            </optgroup>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label for="name" class="control-label">Grupo de Investigacion</label>
                                                                        <select class="form-control" data-toggle="select2" name="Grupo_investigacion">
                                                                            <option>Select</option>
                                                                            <optgroup label="Grupo de Investigacion">
                                                                                <?php foreach($matrizgruposInvestigciones as $grupoInvestigacion):?>
                                                                                    <option value="<?php echo $grupoInvestigacion['id']; ?>"><?php echo $grupoInvestigacion['nombre']; ?></option>
                                                                                <?php endforeach;?>                                                    
                                                                            </optgroup>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="form-row">
                                                                    <div class="form-group col-md-6">
                                                                        <label for="name" class="control-label">Categoria del Grupo</label>
                                                                        <select class="form-control" data-toggle="select2" name="cateGrupo">
                                                                            <option>Select</option>
                                                                            <optgroup label="Categoria del Grupo">
                                                                                <?php foreach($matrizCategoriaGrupos as $CategoriaGrupo):?>
                                                                                    <option value="<?php echo $CategoriaGrupo['id']; ?>"><?php echo $CategoriaGrupo['nombre']; ?></option>
                                                                                <?php endforeach;?>                                                    
                                                                            </optgroup>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label for="name" class="control-label">Grandes Areas del Conocimiento</label>
                                                                        <select class="form-control" data-toggle="select2" name="GranAreaConoci">
                                                                            <option>Select</option>
                                                                            <optgroup label="Grandes Areas del Conocimiento">
                                                                                <?php foreach($matrizGrandesAreasConocimientos as $granareaconocimiento):?>
                                                                                    <option value="<?php echo $granareaconocimiento['id']; ?>"><?php echo $granareaconocimiento['nombre']; ?></option> 
                                                                                <?php endforeach;?>                                                   
                                                                            </optgroup>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="form-row">
                                                                    <div class="form-group col-md-6">
                                                                        <label for="name" class="control-label">Areas del conocimiento</label>
                                                                        <select class="form-control" data-toggle="select2" name="area_conocimiento">
                                                                            <option>Select</option>
                                                                            <optgroup label="Areas del conocimiento">
                                                                                <?php foreach($matrizAreasConocimientos as $areaconocimiento):?>
                                                                                    <option value="<?php echo $areaconocimiento['id']; ?>"><?php echo $areaconocimiento['nombre']; ?></option> 
                                                                                <?php endforeach;?>                                                   
                                                                            </optgroup>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label for="name" class="control-label">Departamento</label>
                                                                        <select class="form-control" data-toggle="select2" name="departamento">
                                                                            <option>Select</option>
                                                                            <optgroup label="Departamento">
                                                                                <?php foreach($matrizDepartamentos as $departamento):?>
                                                                                    <option value="<?php echo $departamento['id']; ?>"><?php echo $departamento['nombre']; ?></option>
                                                                                <?php endforeach;?>                                                    
                                                                            </optgroup>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="form-row">
                                                                    <div class="form-group col-md-6">
                                                                        <label for="name" class="control-label">Municipio</label>
                                                                        <select class="form-control" data-toggle="select2" name="municipio">
                                                                            <option>Select</option>
                                                                            <optgroup label="Departamento">
                                                                                <?php foreach($matrizMunicipios as $municipio):?>
                                                                                    <option value="<?php echo $municipio['id']; ?>"><?php echo $municipio['nombre']; ?></option>
                                                                                <?php endforeach;?>                                                    
                                                                            </optgroup>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label for="name" class="control-label">Investigador Principal</label>
                                                                        <select class="form-control" data-toggle="select2" name="invetigaPrincipal">
                                                                            <option>Select</option>
                                                                            <optgroup label="Investigador Principal">
                                                                                <?php foreach($matrizInvestigadoresPrincipales as $InvestigadorPrincipal):?>
                                                                                    <option value="<?php echo $InvestigadorPrincipal['id']; ?>"><?php echo $InvestigadorPrincipal['nombre']; ?></option>
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
                                                                        <label for="name" class="control-label">Nombre del Proyecto</label>
                                                                        <input type="text" class="required form-control" id="name" name="nomPro">
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label for="name" class="control-label">Nombre del Grupo</label>
                                                                        <input type="text" class="required form-control" id="name" name="nomGru">
                                                                    </div>
                                                                </div>
                                                                <div class="form-row">
                                                                    <div class="form-group col-md-6">
                                                                        <label for="name" class="control-label">Lineas Estrategicas</label>
                                                                        <select class="form-control" data-toggle="select2" name="lineaEstra">
                                                                            <option>Select</option>
                                                                            <optgroup label="Lineas Estrategicas">
                                                                                <?php foreach($matrizlineasEstrategicas as $lineaEtrategica):?>
                                                                                    <option value="<?php echo $lineaEtrategica['id']; ?>"><?php echo $lineaEtrategica['nombre']; ?></option>
                                                                                <?php endforeach;?>                                                    
                                                                            </optgroup>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label for="name" class="control-label">Alcance Tematico</label>
                                                                        <select class="form-control" data-toggle="select2" name="alcanceTema">
                                                                            <option>Select</option>
                                                                            <optgroup label="Alcance Tematico">
                                                                                <?php foreach($matrizAlcancesTematicos as $alcanceTematico):?>
                                                                                    <option value="<?php echo $alcanceTematico['id']; ?>"><?php echo $alcanceTematico['nombre']; ?></option>
                                                                                <?php endforeach;?>                                                     
                                                                            </optgroup>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="form-row">
                                                                    <div class="form-group col-md-6">
                                                                        <label for="name" class="control-label">Problema Central</label>
                                                                        <div>
                                                                            <textarea required class="form-control" name="central"></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label for="name" class="control-label">Objetivo General</label>
                                                                        <div>
                                                                            <textarea required class="form-control" name="general"></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-row">
                                                                    <div class="form-group col-md-12">
                                                                        <label for="name" class="control-label">Objetivos Especificos</label>
                                                                        <div>
                                                                            <textarea required class="form-control" name="especifico"></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-row">
                                                                    <div class="form-group col-md-12">
                                                                        <label for="name" class="control-label">Justificacion</label>
                                                                        <div>
                                                                            <textarea required class="form-control" name="justificacion"></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-row">
                                                                    <div class="form-group col-md-12">
                                                                        <label for="name" class="control-label">Decripcion del Proyecto</label>
                                                                        <div>
                                                                            <textarea required class="form-control" name="descriPro"></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-row">
                                                                    <div class="form-group col-md-12">
                                                                        <label for="name" class="control-label">Resumen</label>
                                                                        <div>
                                                                            <textarea required class="form-control" name="resumen"></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-row">
                                                                    <div class="form-group col-md-3">
                                                                        <label class="control-label" for="name">Anexo (5MB)</label>
                                                                        <div>
                                                                            <input type="file" class="form-control" id="example-fileinput" name="anexo">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group col-md-3">
                                                                        <label for="name" class="control-label">Presupuesto Estimado</label>
                                                                        <input type="number" class="required form-control" id="name" name="presuEstimado">
                                                                    </div>
                                                                    <div class="form-group col-md-3">
                                                                        <label for="name" class="control-label">Estado del Proyecto</label>
                                                                        <select class="form-control" data-toggle="select2" name="estadoPro">
                                                                            <option>Select</option>
                                                                            <optgroup label="Estado del Proyecto">
                                                                                <?php foreach($matrizEstadosProyectos as $estadoProyecto):?>
                                                                                    <option value="<?php echo $estadoProyecto['id']; ?>"><?php echo $estadoProyecto['nombre']; ?></option>
                                                                                <?php endforeach;?>                                                    
                                                                            </optgroup>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group col-md-3">
                                                                        <label for="name" class="control-label">Cronograma de duracion</label>
                                                                        <input type="number" class="required form-control" id="name" name="cronoDuracion">
                                                                    </div>
                                                                </div>
                                                            </section>
                                                        </div>
                                                        <div class="tab-pane" id="beneficiados_pro">
                                                            <div class="col-xl-12">                                                                
                                                                    <ul class="nav nav-pills navtab-bg nav-justified">
                                                                        <li class="nav-item">
                                                                            <a href="#agregarBene" data-toggle="tab" aria-expanded="false" class="nav-link">
                                                                                <span class="d-block d-sm-none"><i class="mdi mdi-home-variant-outline font-18"></i></span>
                                                                                <span class="d-none d-sm-block">Agregar Nuevo Beneficiado</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="nav-item">
                                                                            <a href="#buscaBene" data-toggle="tab" aria-expanded="true" class="nav-link active">
                                                                                <span class="d-block d-sm-none"><i class="mdi mdi-account-outline font-18"></i></span>
                                                                                <span class="d-none d-sm-block">Buscar Beneficiado</span>
                                                                            </a>
                                                                        </li>                                                                        
                                                                    </ul>
                                                                    <div class="tab-content">
                                                                        <div class="tab-pane" id="agregarBene">
                                                                            <div class="form-row">
                                                                                <div class="form-group col-md-6">
                                                                                    <label for="name" class="control-label">Departamento</label>
                                                                                    <select class="form-control" data-toggle="select2" name="departamento_bene">
                                                                                        <option>Select</option>
                                                                                        <optgroup label="Departamento">
                                                                                            <?php foreach($matrizDepartamentos as $departamento):?>
                                                                                                <option value="<?php echo $departamento['id']; ?>"><?php echo $departamento['nombre']; ?></option>
                                                                                            <?php endforeach;?>                                                    
                                                                                        </optgroup>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="form-group col-md-6">
                                                                                    <label for="name" class="control-label">Municipio</label>
                                                                                    <select class="form-control" data-toggle="select2" name="municipio_bene">
                                                                                        <option>Select</option>
                                                                                        <optgroup label="Departamento">
                                                                                            <?php foreach($matrizMunicipios as $municipio):?>
                                                                                                <option value="<?php echo $municipio['id']; ?>"><?php echo $municipio['nombre']; ?></option>
                                                                                            <?php endforeach;?>                                                    
                                                                                        </optgroup>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-row">
                                                                                <div class="form-group col-md-6">
                                                                                    <label for="name" class="control-label">Tipo de poblacion</label>
                                                                                    <select class="form-control" data-toggle="select2" name="tipPoblacion">
                                                                                        <option>Select</option>
                                                                                        <optgroup label="Tipo de poblacion">
                                                                                            <?php foreach($matrizTiposPoblaciones as $tipoPoblacion):?>
                                                                                                <option value="<?php echo $tipoPoblacion['id']; ?>"><?php echo $tipoPoblacion['nombre']; ?></option>
                                                                                            <?php endforeach;?>                                                    
                                                                                        </optgroup>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="form-group col-md-6">
                                                                                    <label for="name" class="control-label">No de Afectados</label>
                                                                                    <input type="number" class="required form-control" id="name" name="numAfectados">
                                                                                </div>
                                                                            </div>

                                                                            <div class="form-row">
                                                                                <div class="form-group col-md-12 d-flex justify-content-center">
                                                                                    <button type="submit"  name="hr" id="hr" class="btn btn-primary waves-effect waves-light btn-lg">Regitrar Proyecto</button>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-row">
                                                                                    <div class="table-responsive">
                                                                                        <table class="table mb-0">
                                                                                            <thead class="thead-dark">
                                                                                                <tr>
                                                                                                    <th>Departamento</th>
                                                                                                    <th>Municipio</th>
                                                                                                    <th>Tipo de Poblacion</th>
                                                                                                    <th>No de Afectados</th> 
                                                                                                    <th>Accion</th>                       
                                                                                                </tr>
                                                                                            </thead>
                                                                                            <tbody>
                                                                                                <tr>                                                                                                    
                                                                                                    <td>Mark</td>
                                                                                                    <td>Otto</td>
                                                                                                    <td>Mark</td>
                                                                                                    <td>Otto</td>
                                                                                                    <td>Mark</td>                                                                                                                                                                                        
                                                                                                </tr>
                                                                                                <tr>                                                                                            
                                                                                                    <td>Jacob</td>
                                                                                                    <td>Thornton</td>
                                                                                                    <td>Jacob</td>
                                                                                                    <td>Thornton</td> 
                                                                                                    <td>Jacob</td>                                                                                                                                                                                         
                                                                                                </tr>
                                                                                                <tr>                                                                                                
                                                                                                    <td>Larry</td>
                                                                                                    <td>the Bird</td>
                                                                                                    <td>Larry</td>
                                                                                                    <td>the Bird</td>
                                                                                                    <td>Larry</td>                                                                                                                                                                                       
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </div>
                                                                            </div>                                                                            
                                                                        </div>
                                                                        <div class="tab-pane show active" id="buscaBene">
                                                                            <section>
                                                                                <div class="form-row">
                                                                                    <div class="form-group col-md-12">
                                                                                        <label class="control-label">Beneficiado</label>                                                                        
                                                                                        <div class="input-group">
                                                                                            <input type="text" class="form-control" placeholder="Buscar los beneficiados" aria-label="Recipient's username">
                                                                                            <div class="input-group-append">
                                                                                                <button class="btn btn-dark waves-effect waves-light" type="button">Buscar</button>
                                                                                            </div>
                                                                                        </div>                                                                        
                                                                                    </div>                                                                    
                                                                                </div>
                                                                                <div class="form-row">
                                                                                    <div class="table-responsive">
                                                                                        <table class="table mb-0">
                                                                                            <thead class="thead-dark">
                                                                                                <tr>
                                                                                                    <th>#</th>
                                                                                                    <th>Beneficiado</th>
                                                                                                    <th>Acciones</th>                        
                                                                                                </tr>
                                                                                            </thead>
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <th scope="row">1</th>
                                                                                                    <td>Mark</td>
                                                                                                    <td>Otto</td>                                                                                    
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <th scope="row">2</th>
                                                                                                    <td>Jacob</td>
                                                                                                    <td>Thornton</td>                                                                                    
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <th scope="row">3</th>
                                                                                                    <td>Larry</td>
                                                                                                    <td>the Bird</td>                                                                                    
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </div>
                                                                                </div>                                                                
                                                                            </section>
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
                                        <div class="form-group col-md-4">
                                            <label for="name" class="control-label">Areas de investigacion</label>
                                            <select class="form-control" data-toggle="select2" name="pais">
                                                <option>Select</option>
                                                <optgroup label="Programas">
                                                    <?php foreach($matrizLineasInvestigaciones as $LineaInvestigacion):?>
                                                        <option value="<?php echo $LineaInvestigacion['id']; ?>"><?php echo $LineaInvestigacion['nombre']; ?></option>
                                                    <?php endforeach;?>                                                    
                                                </optgroup>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-4 d-flex justify-content-end">
                                            <button type="button" class="btn btn-primary waves-effect waves-light btn-lg">Elija sus areas de investigacion</button>
                                        </div>
                                        <div class="form-group col-md-4 d-flex justify-content-center">                                    
                                            <p class="text-muted mb-0">Quieres agregar una nueva Linea de investigacion? <a href="../controlador/LineaInvestigacion_controlador.php" class="text-dark m-l-5"><b>Crear</b></a></p>                                   
                                        </div>                    
                                    </div> 
                                </div>                                                     
                            </div>
                            <div class="tab-pane" id="kid">
                                <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                            </div>
                            <div class="tab-pane" id="cuenta">
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                                <p class="mb-0">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                            </div>                                               
                        </div>                    
                </form>    
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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Registro |Repositorios</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Responsive bootstrap 4 admin template" name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- App css -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
    <link href="../assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-stylesheet" />


</head>

<body>


    <?php
        require("../modelo/insertar_tres.php");
        
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
                                <h4 class="text-white text-center mb-0 mt-0">Actualizar Registro Director</h4>
                            </div>
                            <div class="card-body">
                                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                                    <div class="card">

                                        <ul class="nav nav-tabs">
                                            <li class="nav-item">
                                                <a href="#datosPersonales" data-toggle="tab" aria-expanded="false"
                                                    class="nav-link">
                                                    <span class="d-block d-sm-none"><i
                                                            class="mdi mdi-home-variant-outline font-18"></i></span>
                                                    <span class="d-none d-sm-block">Datos Personales</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#datosContacto" data-toggle="tab" aria-expanded="true"
                                                    class="nav-link active">
                                                    <span class="d-block d-sm-none"><i
                                                            class="mdi mdi-account-outline font-18"></i></span>
                                                    <span class="d-none d-sm-block">Datos de Contacto</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#datosInvestigacion" data-toggle="tab" aria-expanded="false"
                                                    class="nav-link">
                                                    <span class="d-block d-sm-none"><i
                                                            class="mdi mdi-email-outline font-18"></i></span>
                                                    <span class="d-none d-sm-block">Datos de Investigacion</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#nuevaContraseña" data-toggle="tab" aria-expanded="false"
                                                    class="nav-link">
                                                    <span class="d-block d-sm-none"><i
                                                            class="mdi mdi-settings-outline font-18"></i></span>
                                                    <span class="d-none d-sm-block">Nueva Contraseña</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane" id="datosPersonales">
                                                <div class="col-xl-12">
                                                    <section>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="name" class="control-label">Primer Nombre
                                                                    (*)</label>
                                                                    <?php foreach($matrisRegistros as $registro):?>
                                                                <input type="text" class="required form-control"
                                                                    id="name" name="nom_uno" value="<?php echo $registro['primer_nombre'];?>">
                                                                    <?php endforeach;?>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="name" class="control-label">Segundo
                                                                    Nombre</label>
                                                                    <?php foreach($matrisRegistros as $registro):?>
                                                                <input type="text" class="required form-control"
                                                                    id="name" name="nom_dos" value="<?php echo $registro['segundo_nombre'];?>">
                                                                    <?php endforeach;?>
                                                            </div>
                                                        </div>

                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="name" class="control-label">Primer Apellido
                                                                    (*)</label>
                                                                    <?php foreach($matrisRegistros as $registro):?>
                                                                <input type="text" class="required form-control"
                                                                    id="name" name="ape_uno" value="<?php echo $registro['primer_apellido'];?>">
                                                                    <?php endforeach;?>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="name" class="control-label">Segundo Apellido
                                                                    (*)</label>
                                                                    <?php foreach($matrisRegistros as $registro):?>
                                                                <input type="text" class="required form-control"
                                                                    id="name" name="ape_dos" value="<?php echo $registro['segundo_apellido'];?>">
                                                                    <?php endforeach;?>
                                                            </div>
                                                        </div>

                                                        <div class="form-row">
                                                            <div class="form-group col-md-3">
                                                                <label for="name" class="control-label">Nacionalidad
                                                                    (*)</label>
                                                                <select class="form-control" data-toggle="select2"
                                                                    name="pais">
                                                                    <option>--Seleccione--</option>
                                                                    <optgroup label="Nacionalidad">
                                                                        <?php foreach($matrizPaises as $pais):?>
                                                                        <option value="<?php echo $pais['id']; ?>">
                                                                            <?php echo $pais['nombre_pais']; ?></option>
                                                                        <?php endforeach;?>
                                                                    </optgroup>
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-md-3">
                                                                <label for="name" class="control-label">Departamento
                                                                    (*)</label>
                                                                <select class="form-control" data-toggle="select2"
                                                                    name="departamento">
                                                                    <option>--Seleccione--</option>
                                                                    <optgroup label="Departamento">
                                                                        <?php foreach($matrizdepartamentoss as $departamento):?>
                                                                        <option
                                                                            value="<?php echo $departamento['id']; ?>">
                                                                            <?php echo $departamento['nombre_departamento']; ?>
                                                                        </option>
                                                                        <?php endforeach;?>
                                                                    </optgroup>
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-md-3">
                                                                <label for="name" class="control-label">Municipio
                                                                    (*)</label>
                                                                <select class="form-control" data-toggle="select2"
                                                                    name="municipio">
                                                                    <option>--Seleccione--</option>
                                                                    <optgroup label="Municipio">
                                                                        <?php foreach($matrizMunicipios as $municipio):?>
                                                                        <option value="<?php echo $municipio['id']; ?>">
                                                                            <?php echo $municipio['nombre_municipio']; ?></option>
                                                                        <?php endforeach;?>
                                                                    </optgroup>
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-md-3">
                                                                <label for="name" class="control-label">Fecha de
                                                                    Nacimiento (*)</label>
                                                                <div>
                                                                    <div class="input-group">
                                                                        <input type="text" class="form-control"
                                                                            placeholder="mm/dd/yyyy"
                                                                            data-provide="datepicker" name="nacimiento">
                                                                        <div class="input-group-append">
                                                                            <span class="input-group-text"><i
                                                                                    class="mdi mdi-calendar"></i></span>
                                                                        </div>
                                                                    </div>
                                                                    <!-- input-group -->
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-row">
                                                            <div class="form-group col-md-3">
                                                                <label for="name" class="control-label">Tipo de
                                                                    Documento (*)</label>
                                                                <select class="form-control" data-toggle="select2"
                                                                    name="tip_documento">
                                                                    <option>--Seleccione--</option>
                                                                    <optgroup label="Tipo de Documento">
                                                                        <?php foreach($matrizTipoDocumentos as $tipodocumento):?>
                                                                        <option
                                                                            value="<?php echo $tipodocumento['id']; ?>">
                                                                            <?php echo $tipodocumento['nombre_documento']; ?>
                                                                        </option>
                                                                        <?php endforeach;?>
                                                                    </optgroup>
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-md-3">
                                                                <label for="name" class="control-label">Documento de
                                                                    identificacion
                                                                    (*)</label>
                                                                    <?php foreach($matrisRegistros as $registro):?>
                                                                <input type="text" class="required form-control"
                                                                    id="name" name="num_documento" value="<?php echo $registro['numero_de_documento']; ?>">
                                                                    <?php endforeach;?>
                                                            </div>
                                                            <div class="form-group col-md-3">
                                                                <label for="name" class="control-label">Fecha de
                                                                    Expedicion (*)</label>
                                                                <div>
                                                                    <div class="input-group">
                                                                        <input type="text" class="form-control"
                                                                            placeholder="mm/dd/yyyy"
                                                                            data-provide="datepicker"
                                                                            name="fecha_expedicion">
                                                                        <div class="input-group-append">
                                                                            <span class="input-group-text"><i
                                                                                    class="mdi mdi-calendar"></i></span>
                                                                        </div>
                                                                    </div>
                                                                    <!-- input-group -->
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-md-3">
                                                                <label for="name" class="control-label">Lugar de
                                                                    Expedicion (*)</label>
                                                                <select class="form-control" data-toggle="select2"
                                                                    name="lu_expedicion">
                                                                    <option>--Seleccione--</option>
                                                                    <optgroup label="Lugar de Expedicion">
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
                                                            <div class="form-group col-md-3">
                                                                <label for="name" class="control-label">Sexo (*)</label>
                                                                <select class="form-control" data-toggle="select2"
                                                                    name="sexo">
                                                                    <option>--Seleccione--</option>
                                                                    <optgroup label="Sexo">
                                                                        <?php foreach($matrizTipoSexos as $sexos):?>
                                                                        <option value="<?php echo $sexos['codigo']; ?>">
                                                                            <?php echo $sexos['nombre_sexo']; ?></option>
                                                                        <?php endforeach;?>
                                                                    </optgroup>
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-md-3">
                                                                <label for="name" class="control-label">Estado
                                                                    Civil</label>
                                                                <select class="form-control" data-toggle="select2"
                                                                    name="estado_civil">
                                                                    <option>--Seleccione--</option>
                                                                    <optgroup label="Estado Civil">
                                                                        <?php foreach($matrizEstadosCiviles as $estadoCivil):?>
                                                                        <option
                                                                            value="<?php echo $estadoCivil['id']; ?>">
                                                                            <?php echo $estadoCivil['nombre_civil']; ?>
                                                                        </option>
                                                                        <?php endforeach;?>
                                                                    </optgroup>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                            <div class="tab-pane show active" id="datosContacto">
                                                <div class="col-xl-12">
                                                    <section>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="name" class="control-label">Numero de
                                                                    Contacto (*)</label>
                                                                    <?php foreach($matrisRegistros as $registro):?>
                                                                <input type="number" class="required form-control"
                                                                    id="name" name="num_contacto" value="<?php echo $registro['telefono']; ?>">
                                                                    <?php endforeach;?>
                                                            </div>
                                                        </div>

                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="name" class="control-label">Correo
                                                                    Electronico Institucional
                                                                    (*)</label>
                                                                    <?php foreach($matrisRegistros as $registro):?>
                                                                <input type="text" class="required form-control"
                                                                    id="name" name="correo_institu" value="<?php echo $registro['correo_institucional']; ?>">
                                                                    <?php endforeach;?>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="name" class="control-label">Correo
                                                                    Electronico Personal (*)</label>
                                                                    <?php foreach($matrisRegistros as $registro):?>
                                                                <input type="text" class="required form-control"
                                                                    id="name" name="correo_personal" value="<?php echo $registro['correo_personal']; ?>">
                                                                    <?php endforeach;?>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="datosInvestigacion">
                                                <div class="col-xl-12">
                                                    <section>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="name" class="control-label">Nombre en Citas
                                                                    Bibliograficas
                                                                    (Apellidos,Nombre) *</label>
                                                                    <?php foreach($matrisRegistros as $registro):?>
                                                                <input type="text" class="required form-control"
                                                                    id="name" name="citas" value="<?php echo $registro['nombre_bibliografico']; ?>">
                                                                    <?php endforeach;?>
                                                            </div>

                                                            <div class="form-group col-md-6">
                                                                <label for="name" class="control-label">Tipo de
                                                                    Investigador (*)</label>
                                                                <select class="form-control" data-toggle="select2"
                                                                    name="tip_investiga">
                                                                    <option>--Seleccione--</option>
                                                                    <optgroup label="Tipo Investigador">
                                                                        <?php foreach($matrizTipoInvestigadores as $TipoInvestigador):?>
                                                                        <option
                                                                            value="<?php echo $TipoInvestigador['id']; ?>">
                                                                            <?php echo $TipoInvestigador['nombre_investigador']; ?>
                                                                        </option>
                                                                        <?php endforeach;?>
                                                                    </optgroup>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="nuevaContraseña">
                                                <div class="col-xl-12">
                                                    <section>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="name" class="control-label">Nueva
                                                                    Contraseña</label>
                                                                <input type="password" name="contrasena" id="password"
                                                                    class="required form-control">
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div
                                                                class="form-group col-md-12 d-flex justify-content-center">
                                                                <button type="submit" name="ur" id="ur"
                                                                    class="btn btn-primary waves-effect waves-light btn-lg">Actualizar</button>
                                                            </div>
                                                        </div>
                                                    </section>
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
        <script src="assets/js/pages/form-advanced.init.js"></script>

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
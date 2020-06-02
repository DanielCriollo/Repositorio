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
        <link rel="shortcut icon" href="assets/images/favicon.ico">

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
        require("../modelo/insertar.php");

        
    ?>

    <div class="row d-flex justify-content-center account-pages">
        <div class="col-xl-10 account-pages my-5">
        <form  action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="card">
                <div class="card-header text-center p-4 bg-primary">
                    <h4 class="text-white mb-0 mt-0">Gobernacion de Nariño</h4>
                    <h5 class="text-white font-13 mb-0">Registro</h5>
                </div>                              
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a href="#datosPersonales" data-toggle="tab" aria-expanded="false" class="nav-link">
                            <span class="d-block d-sm-none"><i class="mdi mdi-home-variant-outline font-18"></i></span>
                            <span class="d-none d-sm-block">Datos Personales</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#datosContacto" data-toggle="tab" aria-expanded="true" class="nav-link active">
                            <span class="d-block d-sm-none"><i class="mdi mdi-account-outline font-18"></i></span>
                            <span class="d-none d-sm-block">Datos de Contacto</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#datosInvestigacion" data-toggle="tab" aria-expanded="false" class="nav-link">
                            <span class="d-block d-sm-none"><i class="mdi mdi-email-outline font-18"></i></span>
                            <span class="d-none d-sm-block">Datos de Investigacion</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#nuevaContraseña" data-toggle="tab" aria-expanded="false" class="nav-link">
                            <span class="d-block d-sm-none"><i class="mdi mdi-settings-outline font-18"></i></span>
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
                                        <label for="name" class="control-label">Primer Nombre (*)</label>
                                        <input type="text" class="required form-control" id="name" name="nom_uno">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="name" class="control-label">Segundo Nombre</label>
                                        <input type="text" class="required form-control" id="name" name="nom_dos">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="name" class="control-label">Primer Apellido (*)</label>
                                        <input type="text" class="required form-control" id="name" name="ape_uno">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="name" class="control-label">Segundo Apellido (*)</label>
                                        <input type="text" class="required form-control" id="name" name="ape_dos">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label for="name" class="control-label">Nacionalidad (*)</label>
                                        <select class="form-control" data-toggle="select2" name="pais">
                                            <option>Select</option>
                                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                                <option value="1">Colombia</option>                                                    
                                            </optgroup>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="name" class="control-label">Departamento (*)</label>
                                        <select class="form-control" data-toggle="select2" name="departamento">
                                            <option>Select</option>
                                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                                <option value="1">Nariño</option>                                                    
                                            </optgroup>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="name" class="control-label">Municipio (*)</label>
                                        <select class="form-control" data-toggle="select2" name="municipio">
                                            <option>Select</option>
                                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                                
                                                    <option value="1">Pasto</option> 
                                                                                   
                                            </optgroup>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="name" class="control-label">Fecha de Nacimiento (*)</label>
                                        <div>
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="mm/dd/yyyy" data-provide="datepicker" name="nacimiento">
                                                <div class="input-group-append">
                                                    <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                                </div>
                                            </div>
                                                                <!-- input-group -->
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label for="name" class="control-label">Tipo de Documento (*)</label>
                                        <select class="form-control" data-toggle="select2" name="tip_documento">
                                            <option>Select</option>                                                
                                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                                   
                                                    <option value="CC">Cedula de Ciudadania</option>
                                               
                                            </optgroup>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="name" class="control-label">Documento de identificacion (*)</label>
                                        <input type="text" class="required form-control" id="name" name="num_documento">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="name" class="control-label">Fecha de Expedicion (*)</label>
                                        <div>
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="mm/dd/yyyy" data-provide="datepicker" name="fecha_expedicion">
                                                <div class="input-group-append">
                                                    <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                                </div>
                                            </div>
                                                                <!-- input-group -->
                                        </div>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="name" class="control-label">Lugar de Expedicion (*)</label>
                                        <select class="form-control" data-toggle="select2" name="lu_expedicion">
                                            <option>Select</option>
                                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                                <option value="1">Nariño</option>                                                    
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label for="name" class="control-label">Sexo (*)</label>
                                        <select class="form-control" data-toggle="select2" name="sexo">
                                            <option>Select</option>
                                            <optgroup label="Alaskan/Hawaiian Time Zone">                                                
                                                    <option value="MA">Masculino</option>                                                                                             
                                            </optgroup>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="name" class="control-label">Estado Civil</label>
                                        <select class="form-control" data-toggle="select2" name="estado_civil">
                                            <option>Select</option>
                                            <optgroup label="Alaskan/Hawaiian Time Zone">                                                 
                                                    <option value="1">Soltero/a</option>                                                                                           
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
                                            <label for="name" class="control-label">Numero de Contacto (*)</label>
                                            <input type="text" class="required form-control" id="name" name="num_contacto">
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="name" class="control-label">Correo Electronico Institucional (*)</label>
                                            <input type="text" class="required form-control" id="name" name="correo_institu">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="name" class="control-label">Confirmar Correo Electronico Institucional (*)</label>
                                            <input type="text" class="required form-control" id="name" name="veri_correo_institu">
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="name" class="control-label">Correo Electronico (*)</label>
                                            <input type="text" class="required form-control" id="name" name="correo_personal">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="name" class="control-label">Confirmar Correo Electronico (*)</label>
                                            <input type="text" class="required form-control" id="name" name="veri_correo_personal">
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
                                    <label for="name" class="control-label">Nombre en Citas Bibliograficas (Apellidos,Nombre) *</label>
                                    <input type="text" class="required form-control" id="name" name="citas">
                                </div>
                                        
                                <div class="form-group col-md-6">                                            
                                    <label for="name" class="control-label">Tipo de Investigador (*)</label>
                                    <select class="form-control" data-toggle="select2" name="tip_investiga">
                                        <option>Select</option>
                                        <optgroup label="Alaskan/Hawaiian Time Zone">
                                            <option value="1">Investiga</option>                                            
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
                                        <label for="name" class="control-label">Nueva Contraseña</label>
                                        <input type="password" name="contrasena" id="password" class="required form-control"  >
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12 d-flex justify-content-center">
                                        <button type="submit"  name="cr" id="cr" class="btn btn-primary waves-effect waves-light btn-lg">Crear Cuenta</button>
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
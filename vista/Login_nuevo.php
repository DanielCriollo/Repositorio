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
        <link href="assets/libs/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet" />
        <link href="assets/libs/switchery/switchery.min.css" rel="stylesheet" type="text/css" />

        <link href="assets/libs/select2/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />
        <link href="assets/libs/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
        <link href="assets/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.css" rel="stylesheet">
        <link href="assets/libs/bootstrap-datepicker/bootstrap-datepicker.css" rel="stylesheet">

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-stylesheet" />

    </head>
<body>
    <?php
        require("../Login_Repositorio/modelo/insertar.php");
        require("../Login_Repositorio/modelo/logearse.php");
    ?>

    <div class="row d-flex justify-content-center account-pages">
        <div class="col-xl-4 account-pages my-5">
        <form  action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="card">
                <div class="card-header text-center p-4 bg-primary">
                    <h4 class="text-white mb-0 mt-0">Gobernacion de Nariño</h4>
                    <h5 class="text-white font-13 mb-0">Login</h5>
                </div>
                <div class="col-xl-12 account-pages my-3">
                            <section>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="name" class="control-label">Cedula de Ciudadania</label>
                                        <input type="number" class="required form-control" id="documen" name="documen">
                                    </div>
                                    
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="name" class="control-label">Contraseña</label>
                                        <input type="password" class="required form-control" id="contra" name="contra">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6 d-flex justify-content-center">
                                        <button type="submit"  name="pr" id="pr" class="btn btn-primary waves-effect waves-light btn-lg">Iniciar Sesion</button>
                                    </div>
                                    <div class="form-group col-md-6 d-flex justify-content-center">                                    
                                        <p class="text-muted mb-0">No tienes una Cuenta? <a href="../Login_Repositorio/vista/Registro_Nuevo.php" class="text-dark m-l-5"><b>Registrate</b></a></p>                                   
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6 d-flex justify-content-center">
                                        <div class="checkbox checkbox-success">
                                            <input id="remember" type="checkbox" name="recordar">
                                            <label for="remember">
                                                Remember me
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6 d-flex justify-content-center">
                                        <a href="pages-recoverpw.html" class="text-muted float-right">Forgot your password?</a>
                                    </div>
                                </div>                                
                            </section>
                </div>                                             
            </div>
        </form>
        </div>
    </div>

  

    <!-- Vendor js -->
    <script src="assets/js/vendor.min.js"></script>

    <!--Form Wizard-->
    <script src="assets/libs/jquery-steps/jquery.steps.min.js"></script>

    <!-- Init js-->
    <script src="assets/js/pages/form-wizard.init.js"></script>
     <script src="assets/js/pages/form-advanced.init.js"></script>

    <!-- App js -->
    <script src="assets/js/app.min.js"></script>

    <!-- Plugins Js -->
    <script src="assets/libs/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
     <script src="assets/libs/switchery/switchery.min.js"></script>
     <script src="assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
     <script src="assets/libs/jquery-mask-plugin/jquery.mask.min.js"></script>
     <script src="assets/libs/moment/moment.min.js"></script>
     <script src="assets/libs/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
     <script src="assets/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.js"></script>
     <script src="assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
</body>
</html>
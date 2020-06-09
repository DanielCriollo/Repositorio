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
        require("../modelo/agregar.php");

        
    ?>

        <div class="row d-flex justify-content-center account-pages">
            <div class="col-xl-10 account-pages my-5">
                <form  action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <div class="card">
                        <div class="card-header text-center p-4 bg-primary">
                            <h4 class="text-white mb-0 mt-0">Gobernacion de Nariño</h4>
                            <h5 class="text-white font-13 mb-0">Linea de Investigacion</h5>
                        </div>
                        <div class="col-xl-12">
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="name" class="control-label">Nombre de la Linea</label>
                                    <input type="text" class="required form-control" id="documen" name="nombre">
                                </div>                                    
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="name" class="control-label">Objetivo de la Linea</label>
                                    <div>
                                        <textarea required class="form-control" name="objLinea"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="name" class="control-label">Logros de la Linea</label>
                                    <div>
                                        <textarea required class="form-control" name="LogroLinea"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="name" class="control-label">Impacto de la Linea</label>
                                    <div>
                                        <textarea required class="form-control" name="ImpactoLinea"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12 d-flex justify-content-center">
                                    <button type="submit" class="btn btn-primary waves-effect waves-light btn-lg" name="agrega">Agregar</button>
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

    

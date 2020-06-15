<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Login | Repositorios</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Responsive bootstrap 4 admin template" name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- App css -->
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
    <link href="./assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="./assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-stylesheet" />

</head>

<body class="authentication-page">

    <div id="wrapper">

        <!-- Navigation Bar-->
        <header id="topnav">

            <div class="navbar-custom" style="background-color: #1EB1BF;">
                <a class="d-flex justify-content-center navbar-brand"><img src="./assets/images/logo.png" height="50"
                        alt="mdb logo"></a>
            </div>
        </header>
        <div>
            <?php
        require "../Repositorio/modelo/insertar.php";
        require "../Repositorio/modelo/logearse.php";
    ?>
            <div class="account-pages my-5">
                <div class="container " style="margin-top:12%;">
                    <div class="row justify-content-center">
                        <div class="col-md-8 col-lg-6 col-xl-5">
                            <div class="card mt-4">
                                <div class="card-header p-4 bg-primary">
                                    <h4 class="text-white text-center mb-0 mt-0">Bienvenido</h4>
                                </div>
                                <div class="card-body">
                                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="p-2">              

                                        <div class="form-group mb-4">

                                            <label for="name" class="control-label">Cedula de Ciudadania</label>
                                            <input type="number" class="required form-control" id="documen"
                                                name="documen">
                                        </div>

                                        <div class="form-group mb-4">

                                            <label for="name" class="control-label">Contraseña</label>
                                            <input type="password" class="required form-control" id="contra"
                                                name="contra">
                                        </div>

                                        <div class="form-group mb-4">
                                            <div class="checkbox checkbox-success">
                                                <input id="remember" type="checkbox" checked="">
                                                <label for="remember">
                                                    Recordarme
                                                </label>
                                                <a href="pages-recoverpw.html" class="text-muted float-right">¿Olvidó su
                                                    contraseña?</a>
                                            </div>
                                        </div>
                                        <div class="form-group row text-center mt-4 mb-4">
                                            <div class="col-12">
                                                <button type="submit" name="pr" id="pr"
                                                    class="btn btn-primary waves-effect waves-light btn-lg">Iniciar
                                                    Sesion</button>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-0">
                                            <div class="col-sm-12 text-center">
                                                <p class="text-muted mb-0">No tienes una Cuenta? <a
                                                        href="../Repositorio/controlador/Registro_controlador.php"
                                                        class="text-dark m-l-5"><b> | Registrate</b></a></p>

                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- end card-body -->
                            </div>
                            <!-- end card -->

                            <!-- end row -->

                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                </div>
            </div>
        </div>

        <!-- Vendor js -->
        <script src="assets/js/vendor.min.js"></script>

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>

</body>

</html>
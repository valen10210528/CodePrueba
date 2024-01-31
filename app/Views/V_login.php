<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Arce Systems" />
    <meta name="description" content="Quality QMS" />
    <meta name="keywords" content="Quality System Assurance Control de acceso Copropiedad" />
    <meta name="application-name" content="Arce Systems" />
    <title>BSC | Login </title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/adminlte.min.css">
    <script src="<?php echo base_url(); ?>plugins/jquery/jquery.min.js"></script>
</head>

<body class="hold-transition login-page" >
    <div class="login-box">
        <div class="card" >
            <div class="card-body login-card-body"style="background-color: #003253" >
                <div class="text-center">
                    <img id="logo" src="<?php echo base_url(); ?>dist/img/logo.png" width="280px">
                </div>
                <br>
                <form action="" method="post" id="login-form">
                    <div class="input-group mb-3 p-2">
                        <input type="text" class="form-control" placeholder="Usuario" name="email" id="email">
                        <div class="input-group-append">
                            <div class="input-group-text" style="background-color: white;">
                                <span class="fas fa-user" style="color: #003253;"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3 p-2">
                        <input type="password" class="form-control" placeholder="Password" name="password" id="password">
                        <div class="input-group-append">
                            <div class="input-group-text" style="background-color: white;">
                                <span class="fas fa-lock" style="color: #003253;"></span>
                            </div>
                        </div>
                    </div>
<br>    
                    <div class="row">
                        <div class="col-4">
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-light btn-block text-dark">Ingresar</button>
                        </div>
                        <div class="col-4">
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
            </div>
        </div>
        <p class="text-center">Copyrights &copy; 2024 <br> Copyright Arce Systems SAS.<br> Todos los derechos reservados.<br>by Arce Systems SAS</p>
        <!-- jQuery -->
        <script src="/plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE App -->
        <script src="/dist/js/adminlte.min.js"></script>
</body>

</html>
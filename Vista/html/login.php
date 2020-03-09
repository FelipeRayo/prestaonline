<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>PrestaOnline</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <link href="Vista/css/bootstrap.min.css" rel="stylesheet">
    <link href="Vista/css/mdb.min.css" rel="stylesheet">
    <link href="Vista/css/login.css" rel="stylesheet">
</head>
<body>
    <!-- Start your project here-->
    <div class="container-fluid">
        <div class="row no-gutters">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="form-module">
                    <form method="POST" action="login">
                        <p class="h5 text-center mb-4">Login</p>
                        <div class="md-form">
                            <i class="fa fa-user prefix grey-text"></i>
                            <input type="text" id="defaultForm-email" name="user" class="form-control" required>
                            <label for="defaultForm-email">Usuario</label>
                        </div>
                        <div class="md-form">
                            <i class="fa fa-lock prefix grey-text"></i>
                            <input type="password" id="defaultForm-pass" name="password" class="form- control" required>
                            <label for="defaultForm-pass">Contraseña</label>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-cyan">Ingresar <i class="fa fa-paper-plane-o ml-1"></i></button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
    <!-- /Start your project here-->
    <!-- SCRIPTS -->
    <script type="text/javascript" src="Vista/js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="Vista/js/popper.min.js"></script>
    <script type="text/javascript" src="Vista/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="Vista/js/mdb.min.js"></script>
</body>
</html>
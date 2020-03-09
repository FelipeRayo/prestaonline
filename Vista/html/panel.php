<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>PrestaOnline</title>
    <link rel=" stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <link href="Vista/css/bootstrap.min.css" rel="stylesheet">
    <link href="Vista/css/mdb.min.css" rel="stylesheet">
    <link href="Vista/css/compiled.css" rel="stylesheet">
    <link href="Vista/css/style.css" rel="stylesheet">
</head>
<body>
    <!-- Start your project here-->
    <!--...........................................NAVBAR..................................................-->
<?php require "Vista/html/navbar.php"; ?>
<br>
 <!--..........................................CONTENIDO................................................-->
<div class="container-fluid">
<main>
<!--Main layout-->
    <div class="row">
        <!--Menu-->
        <?php require "Vista/html/menu.php"; ?>
        <!--/.Menu-->
        <!--Main column-->
        <div class="col-lg-9">
            <!--First row-->
            <div class="row wow fadeIn">
                <div class="col-md-12">
                    <!--Product-->
                    <div class="product-wrapper">
                        <!--Product data-->
                        <h2 class="h2-responsive mt-4">Bienvenido: <?php echo $_SESSION['nombre']; ?></h2>
                        <hr>
                        <h4 class="card-title">Sistema de gestión de prestamos $$$</h4>
                        <p class="card-text"> Modulos:
                            <ul>
                                <li>Gestión de Clientes</li>
                                <li>Gestión de Prestamos</li>
                                <li>Gestion de Pagos</li>
                                <li>Gestion de Reportes</li>
                                <li>Gestion de Rutas</li>
                                <li>Simulador Credito</li>
                                <li>Cierre Prestamos</li>
                                <li>Gastos</li>
                               <li>Gestión de Empleados</li>
                            </ul>
                        </p>
                    </div>
                    <!--Product-->
                </div>
            </div>
            <!--/.First row-->
        </div>
        <!--/.Main column-->
    </div>
</div>
    <!--/.Main layout-->
</main>
</div>
    <!--...........................................MODALS..................................................-->

<!-- /Start your project here-->

    <!-- SCRIPTS -->
    <script type="text/javascript" src="Vista/js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="Vista/js/popper.min.js"></script>
    <script type="text/javascript" src="Vista/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="Vista/js/mdb.min.js"></script>
</body>
</html>
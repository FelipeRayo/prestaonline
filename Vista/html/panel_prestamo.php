<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>PrestaOnline</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <link href="Vista/css/google-icons.css" rel="stylesheet">
    <link href="Vista/css/bootstrap.min.css" rel="stylesheet">
    <link href="Vista/css/mdb.css" rel="stylesheet">
    <link href="Vista/css/compiled.css" rel="stylesheet">
    <link href="Vista/css/bootstrap-datetimepicker.css" rel="stylesheet" />
    <link href="Vista/css/pmd-datetimepicker.css" rel="stylesheet" />
    <!-- CSS Data tables -->
    <link href="Vista/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="Vista/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="Vista/css/responsive.bootstrap.min.css" rel="stylesheet"> 
    <!-- Aqui Finaliza CSS Data tables -->
    <link href="Vista/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Start your project here-->
    <!-- ...........................................NAVBAR................................................-->
    <?php require "Vista/html/navbar.php"; ?> <br>
    <!-- ..........................................CONTENIDO..............................................-->
    <div class="container-fluid">
        <main>
            <!--Main layout-->
            <div class="row">
                <!--Menu--> <?php require "Vista/html/menu.php"; ?>
                <!--/.Menu-->
                <!--Main column-->
                <div class="col-lg-9">
                    <!--First row-->
                    <div class="row wow fadeIn">
                        <div class="col-md-12">
                            <!--Product-->
                            <div class="product-wrapper">
                                <!--Product data-->
                                <div class="row no-gutters">
                                    <button class="btn btn-cyan" data-toggle="modal" data-target="#frmRegistrarPrestamo"><i class="fa fa-plus mr-1"></i> Prestamo</button>
                                    <a class="btn btn-success" href="VO/ReporteExcel.php" ><i class="fa fa-file-text mr-1"></i> Reporte Excel</a>
                                </div>
                                <hr>
                                <table id="MostrarPrestamos" class="table table-striped table-bordered nowrap" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th style="width:1%">Resumen</th>
                                            <th style="width:1%">Editar</th>
                                            <th style="width:1%">Eliminar</th>
                                            <th>Codigo</th>
                                            <th>Cliente</th>
                                            <th>Ruta</th>
                                            <th>Fecha</th>
                                            <th>Valor</th>
                                            <th>Cuotas</th>
                                            <th>Interes</th>
                                        </tr>
                                    </thead>
                                    <tbody> </tbody>
                                </table>
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
    </div> <!-- ..........................................MODALS................................................-->
    <?php 
        require "Vista/html/modal_registrar_prestamo.php";
        require "Vista/html/modal_editar_prestamo.php";
        require "Vista/html/modal_resumen_prestamo.php";
    ?>
    <!-- /Start your project here-->
    <!-- SCRIPTS -->
    <script type="text/javascript" src="Vista/js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="Vista/js/popper.min.js"></script>
    <script type="text/javascript" src="Vista/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="Vista/js/mdb.min.js"></script>
    <script type="text/javascript" src="Vista/js/moment-with-locales.js"></script>
    <script type="text/javascript" src="Vista/js/bootstrap-datetimepicker.js"></script>
    <script type="text/javascript" src="Vista/js/datepicker.js"></script>
     <!-- Script Data tables -->
    <script type="text/javascript" src="Vista/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="Vista/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript" src="Vista/js/dataTables.fixedHeader.min.js"></script>
    <script type="text/javascript" src="Vista/js/dataTables.responsive.min.js"></script>
    <script type="text/javascript" src="Vista/js/responsive.bootstrap.min.js"></script>
     <!-- Aqui Finaliza Script Data tables -->
    <script type="text/javascript" src="Vista/js/prestamos.js"></script>
</body>
</html>
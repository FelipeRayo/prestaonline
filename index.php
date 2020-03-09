<?php
    session_start();
    require "Controlador/Controlador.php";
    require "Controlador/ControladorCliente.php";
    require "Controlador/ControladorRuta.php";
    require "Controlador/ControladorPrestamo.php";
    require "DAO/DAOLogin.php";
    require "DAO/DAOCliente.php";
    require "DAO/DAORuta.php";
    require "DAO/DAOPrestamo.php";
    require "VO/Conexion.php";   
    require "VO/Cliente.php";
    require "VO/Ruta.php";
    require "VO/Prestamo.php";
    $controlador = new Controlador();
    $controladorCliente = new ControladorCliente();
    $controladorRuta = new ControladorRuta();
    $controladorPrestamo = new ControladorPrestamo();
    if (isset($_SESSION['usuario'])) {
        if (isset($_GET['accion'])) {
            switch ($_GET['accion']) {
      
                case 'inicio':
                    $controlador->abrir_pagina("Vista/html/panel.php");
                break;
      
                case 'logout':
                    $controlador->cerrarSesion();
                break;   
        /*----------------------------------Modulo Clientes----------------------------------*/    
                case 'clientes':
                    $controlador->abrir_pagina("Vista/html/panel_cliente.php");
                break;                                                                                             
            
                case 'RegistrarCliente':
                    $controladorCliente->RegistrarCliente($_POST['frmcli_iden'],$_POST['frmcli_nomb'],
                    $_POST['frmcli_apel'],$_POST['frmcli_fech'],$_POST['frmcli_dire'],$_POST['frmcli_correo'],
                    $_POST['frmcli_tele'],$_POST['frmcli_cel1'],$_POST['frmcli_cel2'],
                    $_POST['frmcli_dirt'],$_POST['frmcli_telt'],$_POST['frmcli_fiad'],
                    $_POST['frmcli_conf']);
                    
                break;
        
                case 'EditarCliente':
                        $controladorCliente->EditarCliente($_POST['id']);
                break;
        
                case 'ActualizarCliente':
                    $controladorCliente->ActualizarCliente($_POST['frmcli_iden1'],$_POST['frmcli_nomb1'],
                    $_POST['frmcli_apel1'],$_POST['frmcli_fech1'],$_POST['frmcli_dire1'],$_POST['frmcli_correo1'],
                    $_POST['frmcli_tele1'],$_POST['frmcli_cel11'],$_POST['frmcli_cel21'],
                    $_POST['frmcli_dirt1'],$_POST['frmcli_telt1'],
                    $_POST['frmcli_fiad1'],$_POST['frmcli_conf1']);
                break;
        
                case 'EliminarCliente':
                    $controladorCliente->EliminarCliente($_POST['id']);
                break;
        /*-------------------------------------Modulo Rutas-------------------------------------*/    
                case 'rutas':
                    $controlador->abrir_pagina("Vista/html/panel_ruta.php");
                break;

                case 'RegistrarRuta':
                    $controladorRuta->RegistrarRuta($_POST['frmdesc_ruta']);
                break;

                case 'EditarRuta':
                    $controladorRuta->EditarRuta(
                        $_POST['cod']
                    );
                break;

                case 'ActualizarRuta':
                    $controladorRuta->ActualizarRuta(
                        $_POST['frmcod_ruta1'],
                        $_POST['frmdesc_ruta1']
                    );
                break;

                case 'EliminarRuta':
                    $controladorRuta->EliminarRuta(
                        $_POST['cod']
                    );
                break;
        /*-------------------------------------Modulo Prestamos-------------------------------------*/    
                case 'prestamos':
                    $controlador->abrir_pagina("Vista/html/panel_prestamo.php");
                break;

                case 'RegistrarPrestamo':
                    $controladorPrestamo->RegistrarPrestamo(
                        $_POST['frmcod_cliente'],
                        $_POST['frmcod_ruta'],
                        $_POST['frmvalor_prestamo'],
                        $_POST['frmcuotas_pre'],
                        $_POST['frminteres_pre']
                    );
                break;

                case 'EditarPrestamo':
                    $controladorPrestamo->EditarPrestamo(
                        $_POST['cod']
                    );
                break;

                case 'ActualizarPrestamo':
                    $controladorPrestamo->ActualizarPrestamo(                     
                        $_POST['frmcod_pre1'],
                        $_POST['frmcod_ruta1'],
                        $_POST['frmvalor_pre1'],
                        $_POST['frmcant_cuotas1'],
                        $_POST['frminteres1']
                    );
                break;

                case 'EliminarPrestamo':
                    $controladorPrestamo->EliminarPrestamo(
                        $_POST['cod']
                    );
                break;

                case 'VerPrestamo':
                    $controladorPrestamo->VerPrestamo(
                        $_POST['cod']
                    );
                break;

                case 'ReporteExcel':
                    $controladorPrestamo->ReporteExcel();
                break;
            }
        }else{
            $controlador->abrir_pagina("Vista/html/panel.php");
        }      
    }else{
        if (isset($_GET['accion'])) {
            switch ($_GET['accion']) { 
                case 'login':
                    $controlador->login($_POST['user'],$_POST['password']);
                 break;
        
                default:
                    $controlador->abrir_pagina("Vista/html/login.php");
                break;
            }
        }else{
            $controlador->abrir_pagina("Vista/html/login.php");
        } 
    }
       
       
     

?>
<?php
    class Controlador
    {
        public function abrir_pagina($url)
        {
            if(isset($_SESSION['precod']))
            { 
                unset($_SESSION['idcliente']);
                unset($_SESSION['namecliente']); 
                unset($_SESSION['precod']);
                unset($_SESSION['prefecha']);
                unset($_SESSION['prevalor']); 
                unset($_SESSION['pretpago']); 
                unset($_SESSION['precant']); 
                unset($_SESSION['preinte']); 
                unset($_SESSION['preestado']);
            }
        
            require $url;
        }
        
        public function login($user,$pass)
        {
            $dao = new DAOLogin();
            $result = $dao->Login($user, $pass);
            switch ($result) {
                case 1:
                    $resultdf = $dao->Dusuarios($user);
                    $row=$resultdf->fetch();
                    $_SESSION["usuario"]=$row['USU_CODIGO'];
                    $_SESSION["nombre"] = $row['USU_NOMBRE'];
                    $_SESSION["apellido"] = $row['USU_APELLIDO'];        
                    $_SESSION["rol"] = $row['USU_ROL'];       
                    $_SESSION["estado"] = $row['USU_ESTADO'];
                    require_once ("Vista/html/panel.php");
                break;

                case 2: 
                    header("Location:index.php?accion=vlogin&error=1");
                break;
    
                case 3:
                    header("Location:index.php?accion=vlogin&error=2");
                break;
    
            }
    
        }
    
        public function cerrarSesion()
        {
            if(isset($_SESSION["usuario"]))
            { 
                unset($_SESSION["usuario"]);
                unset($_SESSION["nombre"]); 
                unset($_SESSION["apellido"]); 
                unset($_SESSION["rol"]); 
                unset($_SESSION["estado"]); 
                unset($_SESSION['idcliente']); 
                unset($_SESSION['namecliente']); 
                unset($_SESSION['precod']); 
                unset($_SESSION['prefecha']); 
                unset($_SESSION['prevalor']); 
                unset($_SESSION['pretpago']); 
                unset($_SESSION['precant']);
                unset($_SESSION['preinte']); 
                unset($_SESSION['preestado']);
            
            }
            session_destroy(); 
            header("Location:index.php");
        }
    }
    



?>
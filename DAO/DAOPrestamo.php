<?php

    class DAOPrestamo
    {

        public function ValorTotal($valor_prestamo,$cuotas,$interes)
        {
            $interes = ($interes/100);
            $Interes_prestamo = ($valor_prestamo*$interes);
            $InteresTotal = ($Interes_prestamo*$cuotas);
            $valor_total = ($InteresTotal+$valor_prestamo);
            round($valor_total);
            return $valor_total;
        }

        public function RegistrarPrestamo(Prestamo $prestamo)
        {
            $conexion = new Conexion();
            $cod_cliente = $prestamo->getcod_cliente();
            $cod_ruta = $prestamo->getcod_ruta();
            $valor_prestamo = $prestamo->getvalor_prestamo();
            $cant_cuotas_prestamo = $prestamo->getcant_cuotas_prestamo();
            $intereses_prestamo = $prestamo->getintereses_prestamo();          
            date_default_timezone_set("America/Bogota");
            $fecha_prestamo = date("Y-m-d H:i:s");
            // $valor_total=$this->ValorTotal($valor_prestamo,$cant_cuotas_prestamo,$intereses_prestamo);
            $error = 1;
            $exito = 2;
            if (
                $cod_cliente == "" or $cod_ruta == "" or $fecha_prestamo == "" or
                $valor_prestamo == "" or $cant_cuotas_prestamo == "" or $intereses_prestamo == ""               
            ) 
            {
                echo json_encode($error);
            } else {
                $sql = "INSERT INTO prestamo VALUES (
                    null, '$cod_cliente', $cod_ruta,'$fecha_prestamo', $valor_prestamo,
                    $cant_cuotas_prestamo, $intereses_prestamo)";
                $conexion->ejecutar_query($sql);
                echo json_encode($exito);
            }
        }

        public function EditarPrestamo(Prestamo $prestamo)
        {
            $conexion = new Conexion();
            $cod_prestamo = $prestamo->getcod_prestamo();
            $sql = "SELECT * FROM prestamo WHERE Cod_Prestamo = '$cod_prestamo'";
            $conexion->buscar_query($sql);
            $result = $conexion->obtenerResult();
            return $result;
        }

        public function ActualizarPrestamo(Prestamo $prestamo)
        {
            $conexion = new Conexion();
            $cod_prestamo = $prestamo->getcod_prestamo();
            $cod_ruta = $prestamo->getcod_ruta();
            $valor_prestamo = $prestamo->getvalor_prestamo();
            $cant_cuotas_prestamo = $prestamo->getcant_cuotas_prestamo();
            $intereses_prestamo = $prestamo->getintereses_prestamo();
            // $valor_total=$this->ValorTotal($valor_prestamo,$cant_cuotas_prestamo,$intereses_prestamo);
            $sql = "UPDATE prestamo SET Cod_Ruta = '$cod_ruta', Valor_prestamo = '$valor_prestamo',
                Cant_cuotas_prestamo = '$cant_cuotas_prestamo', Interes_prestamo = '$intereses_prestamo'
                WHERE Cod_Prestamo = '$cod_prestamo'";
            $conexion->buscar_query($sql);
            $result = $conexion->ObtenerFilasAfectadas();
        }

        public function EliminarPrestamo(Prestamo $prestamo)
        {
            $conexion = new Conexion();
            $id = $prestamo->getcod_prestamo();
            $sql = "DELETE FROM prestamo WHERE Cod_Prestamo = '$id'";
            $conexion->buscar_query($sql);
            $result = $conexion->obtenerResult();
        }

        public function VerPrestamo(Prestamo $prestamo)
        {
            $conexion = new Conexion();
            $cod_prestamo = $prestamo->getcod_prestamo();
            $sql = "SELECT * FROM prestamo WHERE Cod_Prestamo = '$cod_prestamo'";
            $conexion->buscar_query($sql);
            $result = $conexion->obtenerResult();
            return $result;
        }
    }
    
?>
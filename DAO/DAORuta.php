<?php 

    class DAORuta
    {
        public function RegistrarRuta(Ruta $ruta)
        {
            $conexion = new Conexion();
            $desc_ruta = $ruta->getdesc_ruta();
            $error = 1;
            $exito = 2;
            if (
                 $desc_ruta == "" 
            ) 
            {
                echo json_encode($error);
            } else {
                $sql = "INSERT INTO ruta VALUES (null,'$desc_ruta')";
                $conexion->ejecutar_query($sql);
                echo json_encode($exito);
            }
        }

        public function EditarRuta(Ruta $ruta)
        {
            $conexion = new Conexion();
            $cod_ruta = $ruta->getcod_ruta();
            $sql = "SELECT * FROM ruta WHERE Cod_Ruta = '$cod_ruta'";
            $conexion->buscar_query($sql);
            $result = $conexion->obtenerResult();
            return $result;
        }

        public function ActualizarRuta(Ruta $ruta)
        {
            $conexion = new Conexion();
            $cod_ruta = $ruta->getcod_ruta();
            $desc_ruta = $ruta->getdesc_ruta();
            $sql = "UPDATE ruta SET  Desc_Ruta = '$desc_ruta' WHERE Cod_Ruta = '$cod_ruta'";
            $conexion->buscar_query($sql);
            $result = $conexion->ObtenerFilasAfectadas();
        }

        public function EliminarRuta(Ruta $ruta)
        {
            $conexion = new Conexion();
            $cod = $ruta->getcod_ruta();
            $sql = "DELETE FROM ruta WHERE Cod_ruta = '$cod'";
            $conexion->buscar_query($sql);
            $result = $conexion->obtenerResult();
        }
    }




?>
<?php

    class DAOCliente
    {
        public function RegistrarCliente(Cliente $cliente)
        {
            $conexion = new Conexion();
            $frmcli_iden = $cliente->getfrmcli_iden();
            $frmcli_nomb = $cliente->getfrmcli_nomb();
            $frmcli_apel = $cliente->getfrmcli_apel();
            $frmcli_fech = $cliente->getfrmcli_fech();
            $frmcli_dire = $cliente->getfrmcli_dire();
            $frmcli_correo = $cliente->getfrmcli_correo();
            $frmcli_tele = $cliente->getfrmcli_tele();
            $frmcli_cel1 = $cliente->getfrmcli_cel1();
            $frmcli_cel2 = $cliente->getfrmcli_cel2();
            $frmcli_dirt = $cliente->getfrmcli_dirt();
            $frmcli_telt = $cliente->getfrmcli_telt();
            $frmcli_fiad = $cliente->getfrmcli_fiad();
            $frmcli_conf = $cliente->getfrmcli_conf();
            date_default_timezone_set("America/Bogota");
            $frmcli_fecr = date("Y-m-d H:i:s");
            $error = 1;
            $exito = 2;
            if (
                $frmcli_iden == "" or $frmcli_nomb == "" or $frmcli_apel == "" or $frmcli_fech == "" or

                $frmcli_dire == "" or $frmcli_correo == "" or $frmcli_tele == "" or $frmcli_cel1 == "" or $frmcli_cel2 == "" or

                $frmcli_dirt == "" or $frmcli_telt == "" or $frmcli_fiad == "" or $frmcli_conf == ""
            ) 
            {
                echo json_encode($error);
            } else {
                $sql = "INSERT INTO cliente VALUES ('$frmcli_iden','$frmcli_nomb','$frmcli_apel',
                    '$frmcli_fech','$frmcli_dire', '$frmcli_correo','$frmcli_tele','$frmcli_cel1','$frmcli_cel2','$frmcli_dirt',
                    '$frmcli_telt','$frmcli_fiad','$frmcli_conf','Registrado','$frmcli_fecr')";
                $conexion->ejecutar_query($sql);
                echo json_encode($exito);
            }
        }

        public function EditarCliente(Cliente $cliente)
        {
            $conexion = new Conexion();
            $id = $cliente->getfrmcli_iden();
            $sql = "SELECT * FROM cliente WHERE IDENTIFICACION = '$id'";
            $conexion->buscar_query($sql);
            $result = $conexion->obtenerResult();
            return $result;
        }

        public function ActualizarCliente(Cliente $cliente)
        {
            $conexion = new Conexion();
            $frmcli_iden1 = $cliente->getfrmcli_iden();
            $frmcli_nomb1 = $cliente->getfrmcli_nomb();
            $frmcli_apel1 = $cliente->getfrmcli_apel();
            $frmcli_fech1 = $cliente->getfrmcli_fech();
            $frmcli_dire1 = $cliente->getfrmcli_dire();
            $frmcli_correo = $cliente->getfrmcli_correo();
            $frmcli_tele1 = $cliente->getfrmcli_tele();
            $frmcli_cel11 = $cliente->getfrmcli_cel1();
            $frmcli_cel21 = $cliente->getfrmcli_cel2();
            $frmcli_dirt1 = $cliente->getfrmcli_dirt();
            $frmcli_telt1 = $cliente->getfrmcli_telt();
            $frmcli_fiad1 = $cliente->getfrmcli_fiad();
            $frmcli_conf1 = $cliente->getfrmcli_conf();
            date_default_timezone_set("America/Bogota");
            $frmcli_fecr1 = date("Y-m-d H:i:s");
            $sql = "UPDATE cliente SET CLI_NOMBRE = '$frmcli_nomb1', CLI_APELLIDO = '$frmcli_apel1',
                CLI_FECNAC = '$frmcli_fech1', CLI_DIRECCION = '$frmcli_dire1', CLI_CORREO = '$frmcli_correo', CLI_TEL = '$frmcli_tele1',
                CLI_CEL1= '$frmcli_cel11', CLI_CEL2 = '$frmcli_cel21', CLI_DIRTRA = '$frmcli_dirt1', 
                CLI_TELTRA = '$frmcli_telt1', CLI_FIADOR = '$frmcli_fiad1', CLI_CONTACFIADOR = '$frmcli_conf1',
                CLI_ESTADO = 'Actualizado', CLI_FECREG = '$frmcli_fecr1' 
                WHERE IDENTIFICACION = '$frmcli_iden1'";
            $conexion->buscar_query($sql);
            $result = $conexion->ObtenerFilasAfectadas();
        }

        public function EliminarCliente(Cliente $cliente)
        {
            $conexion = new Conexion();
            $id = $cliente->getfrmcli_iden();
            $sql = "DELETE FROM cliente WHERE IDENTIFICACION = '$id'";
            $conexion->buscar_query($sql);
            $result = $conexion->obtenerResult();
        }

        public function Prestamos(){
            
        }
    }
?>
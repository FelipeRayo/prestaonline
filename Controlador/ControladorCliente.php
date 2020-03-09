<?php
    class ControladorCliente
    {
        public function RegistrarCliente($frmcli_iden,$frmcli_nomb,$frmcli_apel,$frmcli_fech,$frmcli_dire,
        $frmcli_correo,$frmcli_tele,$frmcli_cel1,$frmcli_cel2,$frmcli_dirt,$frmcli_telt,$frmcli_fiad,$frmcli_conf)
        {
            $dao = new DAOCliente();
            $cliente = new Cliente();       
            $cliente->setfrmcli_iden($frmcli_iden);       
            $cliente->setfrmcli_nomb($frmcli_nomb);       
            $cliente->setfrmcli_apel($frmcli_apel);       
            $cliente->setfrmcli_fech($frmcli_fech);       
            $cliente->setfrmcli_dire($frmcli_dire);
            $cliente->setfrmcli_correo($frmcli_correo);
            $cliente->setfrmcli_tele($frmcli_tele);
            $cliente->setfrmcli_cel1($frmcli_cel1);
            $cliente->setfrmcli_cel2($frmcli_cel2);
            $cliente->setfrmcli_dirt($frmcli_dirt);
            $cliente->setfrmcli_telt($frmcli_telt);
            $cliente->setfrmcli_fiad($frmcli_fiad);
            $cliente->setfrmcli_conf($frmcli_conf);
            $result = $dao->RegistrarCliente($cliente);
        }

        public function EditarCliente($id)
        {
            $dao = new DAOCliente();
            $cliente = new Cliente();
            $cliente->setfrmcli_iden($id);
            $result = $dao->EditarCliente($cliente);
            $row = $result->fetch();
            $data = array(
                'CC' => $row['IDENTIFICACION'],
                'Nombre' => $row['CLI_NOMBRE'],
                'Apellido' => $row['CLI_APELLIDO'], 
                'FedeNacimiento' => $row['CLI_FECNAC'], 
                'Direccion' => $row['CLI_DIRECCION'], 
                'Correo' => $row['CLI_CORREO'], 
                'Tel' => $row['CLI_TEL'],
                'Cel1' => $row['CLI_CEL1'], 
                'Cel2' => $row['CLI_CEL2'],
                'DirecTrabajo' => $row['CLI_DIRTRA'], 
                'TelefTrabajo' => $row['CLI_TELTRA'], 
                'Fiador' => $row['CLI_FIADOR'],
                'ContactoFiador' => $row['CLI_CONTACFIADOR']

            );
            echo json_encode($data);

        }

        public function ActualizarCliente($frmcli_iden1,$frmcli_nomb1,$frmcli_apel1,$frmcli_fech1,
            $frmcli_dire1,$frmcli_correo1,$frmcli_tele1,$frmcli_cel11,$frmcli_cel21,$frmcli_dirt1,$frmcli_telt1,
            $frmcli_fiad1,$frmcli_conf1)
        {
            $dao = new DAOCliente();
            $cliente = new Cliente();            
            $cliente->setfrmcli_iden($frmcli_iden1);          
            $cliente->setfrmcli_nomb($frmcli_nomb1);           
            $cliente->setfrmcli_apel($frmcli_apel1);           
            $cliente->setfrmcli_fech($frmcli_fech1);            
            $cliente->setfrmcli_dire($frmcli_dire1);           
            $cliente->setfrmcli_correo($frmcli_correo1);           
            $cliente->setfrmcli_tele($frmcli_tele1);           
            $cliente->setfrmcli_cel1($frmcli_cel11);            
            $cliente->setfrmcli_cel2($frmcli_cel21);            
            $cliente->setfrmcli_dirt($frmcli_dirt1);           
            $cliente->setfrmcli_telt($frmcli_telt1);            
            $cliente->setfrmcli_fiad($frmcli_fiad1);           
            $cliente->setfrmcli_conf($frmcli_conf1);            
            $result = $dao->ActualizarCliente($cliente);   
        }
    
        public function EliminarCliente($id)
        {
            $dao = new DAOCliente();
            $cliente = new Cliente(); 
            $cliente->setfrmcli_iden($id);
            $result = $dao->EliminarCliente($cliente);
        }



    }


?>





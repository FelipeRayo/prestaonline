<?php

    Class ControladorRuta
    {
        public function RegistrarRuta($desc_ruta)
        {
            $dao = new DAORuta();
            $ruta = new Ruta();       
            $ruta->setdesc_ruta($desc_ruta);       
            $result = $dao->RegistrarRuta($ruta);
        }

        public function EditarRuta($cod_ruta)
        {
            $dao = new DAORuta();
            $ruta = new Ruta();
            $ruta->setcod_ruta($cod_ruta);
            $result = $dao->EditarRuta($ruta);
            $row = $result->fetch();
            $data = array(
                'Codigo' => $row['Cod_Ruta'],
                'Descripcion' => $row['Desc_Ruta']
            );
            echo json_encode($data);

        }

        public function ActualizarRuta($cod_ruta,$desc_ruta)
        {
            $dao = new DAORuta();
            $ruta = new Ruta();            
            $ruta->setcod_ruta($cod_ruta);          
            $ruta->setdesc_ruta($desc_ruta);           
            $result = $dao->ActualizarRuta($ruta);   
        }
    
        public function EliminarRuta($cod)
        {
            $dao = new DAORuta();
            $ruta = new Ruta(); 
            $ruta->setcod_ruta($cod);
            $result = $dao->EliminarRuta($ruta);
        }

     

    }


?>
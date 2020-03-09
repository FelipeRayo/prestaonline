<?php
    class Ruta
    {
        private $cod_ruta;
        private $desc_ruta;
        

        public function Ruta()
        {
        }

        public function getcod_ruta()
        {
            return $this->cod_ruta;
        }

        public function getdesc_ruta()
        {
            return $this->desc_ruta;
        }

        /*SET*/

        public function setcod_ruta($valor)
        {

            $this->cod_ruta = $valor;
        }

        public function setdesc_ruta($valor)
        {

            $this->desc_ruta = $valor;
        }

        
    }

?>
        
         
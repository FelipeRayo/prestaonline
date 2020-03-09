<?php
    class Prestamo
    {
        private $cod_prestamo;
        private $cod_cliente;
        private $cod_ruta;
        private $valor_prestamo;
        private $cant_cuotas_prestamo;
        private $intereses_prestamo;
        
        public function Prestamo()
        {
        }

        public function getcod_prestamo()
        {
            return $this->cod_prestamo;
        }

        public function getcod_cliente()
        {
            return $this->cod_cliente;
        }

        public function getcod_ruta()
        {
            return $this->cod_ruta;
        }

        public function getvalor_prestamo()
        {
            return $this->valor_prestamo;
        }

        public function getcant_cuotas_prestamo()
        {
            return $this->cant_cuotas_prestamo;
        }

        public function getintereses_prestamo()
        {
            return $this->intereses_prestamo;
        }

       
        /*SET*/

        public function setcod_prestamo($valor)
        {

            $this->cod_prestamo = $valor;
        }

        public function setcod_cliente($valor)
        {

            $this->cod_cliente = $valor;
        }

        public function setcod_ruta($valor)
        {

            $this->cod_ruta = $valor;
        }

        public function setvalor_prestamo($valor)
        {

            $this->valor_prestamo = $valor;
        }

        public function setcant_cuotas_prestamo($valor)
        {

            $this->cant_cuotas_prestamo = $valor;
        }

        public function setintereses_prestamo($valor)
        {

            $this->intereses_prestamo = $valor;
        }     
    }

?>
        
         
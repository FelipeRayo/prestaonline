<?php
    class Conexion
    {
        private static $host = "localhost"; 
        private static $user = "root"; 
        private static $password = "";
        protected $name = "presta";
        private $conn;
        public $resultado; public $filas; public $Id;

        private function abrir_conexion()
        {
            $this->conn = new PDO ("mysql:host=".self::$host.";dbname=".$this->name."",
            self::$user,self::$password);
        }

        private function cerrar_conexion()
        {
            $this->conn= null;
        }

        public function ejecutar_query($sql)
        {
            $this->abrir_conexion();
            $resultado = $this->conn->exec($sql);
            // print_r($this->conn->errorInfo());
            $this->Id=$this->conn->lastInsertId();
            $this->cerrar_conexion();
        }
            
        public function buscar_query($sql)
        {
            $this->abrir_conexion();
            $this->resultado=$this->conn->query($sql);
            //print_r($this->conn->errorInfo());
            $this->filas=$this->resultado->rowCount();
            $this->cerrar_conexion();  
        }
            
        public function obtenerResult()
        {
            return $this->resultado;
        }
            
        public function ObtenerFilasAfectadas()
        {
            return $this->filas;
        }
            
        public function obtenerId()
        {
            return $this->Id;   
        }   
    }
    
?>
    
    
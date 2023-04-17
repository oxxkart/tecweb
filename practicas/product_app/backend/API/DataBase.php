<?php
   abstract class DataBase{
        protected $conexion;
        //funcion constructor de la base de datos
        public function __construct($database){ 
            //Haciendo conexión con la base de datos
            $this->conexion = new mysqli('localhost', 'root', '1597532486', $database);
            
            if ($this->conexion->connect_errno) {
                die("Fallo al tratar de conectar con MYSQL: (".$this->conexion->connect_errno.")");
            }
        }
    }
?>
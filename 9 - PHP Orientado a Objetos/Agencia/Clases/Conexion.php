<?php 

    class Conexion
    {
        private function __construct()
        {} // Evitamos que se instancia un objeto a partir de la conexion
        
        static function conectar()
        {
            $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
            $link = new PDO(
                'mysql:host=localhost;dbname=agencia', 
                'root', 
                '',
                $opciones
            );
            //Metodo que establece que el modo de muestreo de errores te muestre todo
            $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
            return $link;
        }
    }
<?php 

    class Conexion
    {
        private function __construct()
        {} // Evitamos que se instancia un objeto a partir de la conexion
        
        static function conectar()
        {
            $link = new PDO(
                'mysql:host=localhost;dbname=agencia', 
                'root', 
                ''
            );

            return $link;
        }
    }
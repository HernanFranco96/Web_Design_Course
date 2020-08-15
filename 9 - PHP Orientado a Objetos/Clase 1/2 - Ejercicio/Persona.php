<?php
    class Persona
    {
        // Atributos
        public $nombre;
        public $apellido;
        // Metodos
        function verDatos()
        {
            // .= Concatena y asigna.
            $mensaje = 'Nombre: '.$this->nombre;
            $mensaje .= '<br>';
            $mensaje .= 'Apellido: '.$this->apellido;
            $mensaje .= '<br>';
            return $mensaje;
        }
    }
?>
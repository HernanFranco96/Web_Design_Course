<?php
    class Persona
    {
        // Atributos
        private $nombre;
        private $apellido;

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

        #########################
        ### GETTERS & SETTERS ###
        #########################
        //

        /**
         * Get the value of nombre
         */ 
        public function getNombre()
        {
            return $this->nombre;
        }

        /**
         * Set the value of nombre
         *
         * @return  self
         */ 
        public function setNombre($nombre)
        {
            $this->nombre = $nombre;
            return $this;
        }

        /**
         * Get the value of apellido
         */ 
        public function getApellido()
        {
            return $this->apellido;
        }

        /**
         * Set the value of apellido
         *
         * @return  self
         */ 
        public function setApellido($apellido)
        {
            $this->apellido = $apellido;
            return $this;
        }
    }
?>
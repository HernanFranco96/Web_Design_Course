<?php
    class Persona2
    {
        // Atributos
        private $nombre;
        private $apellido;

        #######################
        ##### CONSTRUCTOR #####
        #######################
        
        
        public function __construct($n,$a)
        {
            $this->setNombre($n);
            $this->setApellido($a);
        }


        // Metodos
        function verDatos()
        {
            // .= Concatena y asigna.
            $mensaje = 'Nombre: '.$this->getNombre();
            $mensaje .= '<br>';
            $mensaje .= 'Apellido: '.$this->getApellido();
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
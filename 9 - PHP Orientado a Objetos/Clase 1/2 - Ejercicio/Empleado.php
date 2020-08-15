<?php

    class Empleado extends Persona2
    {
        private $sueldo;
        
        public function verDatos()
        {
            //Llama a un metodo sin instanciar.
           $mensaje = Persona2::verDatos();
           $mensaje .= "Sueldo: $".$this->getSueldo();
           return $mensaje;
        }


        /**
         * Get the value of sueldo
         */ 
        public function getSueldo()
        {
            return $this->sueldo;
        }

        /**
         * Set the value of sueldo
         *
         * @return  self
         */ 
        public function setSueldo($sueldo)
        {
            $this->sueldo = $sueldo;

            return $this;
        }
    }

?>
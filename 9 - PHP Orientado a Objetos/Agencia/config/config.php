<?php

   ##################### Configuracion General de Sistema 
   session_start();

   ##########################################
   ##################### AutoLoader
   ##########################################

   function autoCarga($class){
      require_once 'Clases/'.$class.'.php';
   }

   spl_autoload_register('autoCarga');
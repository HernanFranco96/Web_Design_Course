<?php

   class Usuario
   {

      ###################################
      ############ Autenticación

      public function login()
      {
         $usuEmail = $_POST['usuEmail'];
         $usuClave = $_POST['usuClave'];
         $link = Conexion::conectar();

         $sql = "SELECT usuNombre
                  FROM usuarios
                  WHERE usuEmail = :usuEmail
                  AND usuClave = :usuClave";

         $stmt = $link->prepare($sql);
         $stmt->bindParam(':usuEmail',$usuEmail);
         $stmt->bindParam(':usuClave',$usuClave);

         $stmt->execute();

         //El numero es igual a la cantidad de registros
         $cantidad = $stmt->rowCount();
         if($cantidad == 0){
            //Redireccion a formLogin con mensaje de error
            header('location: formLogin.php?error=1');
         }else{
            $_SESSION['login'] = 1;
            $datosUsuario = $stmt->fetch(pdo::FETCH_ASSOC);
            $_SESSION['usuNombre'] = $datosUsuario['usuNombre'];
            //Redirección a Admin
            header('location: admin.php');
         }
      }

      public function logout()
      {
         session_destroy();
         header('location: formLogin.php');
      }

      public function autenticar()
      {
         if(!isset($_SESSION['login'])){
            header('formLogin.php?error=2');
         }
      }

   }
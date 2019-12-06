<?php
    function mostrarPage($page){
        include($page.'.php');
    }

    function validarFormulario($nombre, $email, $msj)
    {
        $codMsj = "";
        // Validacion del nombre

            if(ctype_alnum($nombre) && ctype_alpha($nombre) == false) //Si es alfanumerico pero si no es solamente alfabetico.
            {
                $codMsj = "A0C001";
            }
            elseif(ctype_digit($nombre))
            {
                $codMsj = "A0C002";
            }
            elseif(strlen($nombre) < 3)
            {
                $codMsj = "A0C003";
            }
            elseif(strlen($email) < 16) // Validacion del email
            {
                $codMsj = "B0C001";
            }
            elseif(strlen($msj) >= 300) // Validacion del mensaje
            {
                $codMsj = "C0C001";
            }       
            else{
                $codMsj = "A0C000";
            }     
            /*
            $destinatario = "hernan.franco051096@gmail.com";
            $asunto = "Contacto Web";
            $cuerpo = "
                    <h1>Nuevo Correo</h1>
                    Alguien lleno el formulario web<br>
                    <strong>Nombre:</strong>'.$nombre.'<br>
                    <strong>Email:</strong>'.$email.'<br>
                    <strong>Mensaje:</strong>'.$msj.'<br>
                    ";
            $cabecera = "From:" . $email . "\r\n";
            $cabecera.= "MIME-Version: 1.0\r\n";
            $cabecera.= "Content-Type: text/html; charset=UTF-8\r\n";

            if(mail($destinatario,$asunto,$cuerpo,$cabecera))
            {
                header("location:./index.php?page=contacto&correcto=D0C000");
                $codMsj = "D0C000";
            }
            else{
                header("location:./index.php?page=contacto&error=D0C001");
                $codMsj = "D0C001";
            }
            */
        

        return $codMsj;
    }

    function mostrarMensaje($codigo){
        $mensaje = "";

        switch($codigo)
        {
            
            case 'A0C000':  
                $mensaje = "FORMULARIO COMPLETADO CORRECTAMENTE ";
                break;
            case 'A0C001':
                $mensaje = "NOMBRE INCORRECTO: No puede contener numeros y letras.";
                break;
            case 'A0C002':
                $mensaje = "NOMBRE INCORRECTO: No puede contener numeros.";
                break;
            case 'A0C003':
                $mensaje = "NOMBRE INCORRECTO: El nombre debe contener como minimo mas de 3 caracteres.";
                break;
            case 'B0C001':
                $mensaje = "EMAIl INCORRECTO: Debe contener mas de 16 caracteres.";
                break;
            case 'C0C001':
                $mensaje = "MENSAJE INCORRECTO: No puede superar los 300 caracteres.";
                break;
            case 'D0C001':
                $mensaje = "EMAIL NO ENVIADO";
                break;
        }

        return $mensaje;
    }
?>
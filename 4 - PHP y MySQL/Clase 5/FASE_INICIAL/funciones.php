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

    function borrar($conection,$id)
    {
        $sql = "DELETE FROM productos WHERE id=?"; //Hacemos la consulta para eliminar el usuario
        $resultado = $conection->prepare($sql);
        $resultado->bindParam(1,$id,PDO::PARAM_INT);

        if($resultado->execute()) //Nos permite eliminar, insertar o modificar un dato.
        {
           return true;
        }
        return false;
    }

    function insertarProducto($conection,$nombre,$descripcion,$imagen,$precio,$stock)
    {
        $sql = "INSERT INTO productos (nombre,descripcion,imagen,precio,stock) VALUES (?,?,?,?,?)";
        $resultado = $conection->prepare($sql);

        if(validarProducto($nombre,$descripcion,$precio,$stock) == -1)
        {
            echo "<h3>El nombre ingresado no es valido.</h3>";
            return false;
        }
        elseif(validarProducto($nombre,$descripcion,$precio,$stock) == -2)
        {
            echo "<h3>La descripcion ingresada no es valido.</h3>";
            return false;
        }
        elseif(validarProducto($nombre,$descripcion,$precio,$stock) == -3)
        {
            echo "<h3>El precio ingresado no es valido.</h3>";
            return false;
        }
        elseif(validarProducto($nombre,$descripcion,$precio,$stock) == -4)
        {
            echo "<h3>El stock ingresado no es valido.</h3>"; 
            return false;
        }
        $resultado->bindParam(1,$nombre,PDO::PARAM_STR,30);
        $resultado->bindParam(2,$descripcion,PDO::PARAM_STR,100);
        $resultado->bindParam(3,$imagen,PDO::PARAM_STR,50);
        $resultado->bindParam(4,$precio,PDO::PARAM_STR,10.3);
        $resultado->bindParam(5,$stock,PDO::PARAM_INT,11);

        if($resultado->execute())
            return true;

        return false;
    }

    function validarProducto($nombre,$descripcion,$precio,$stock)
    {
        $resp = ""; $index;
        $precioFloat = floatval($precio);
        $stockInt = intval($stock);

        if(!is_string($nombre) || ctype_digit($nombre) || ctype_alnum($nombre) && strlen($nombre) < 3)
            $resp = "A00000";
        elseif(!is_string($descripcion) || ctype_digit($descripcion) && strlen($descripcion) < 3)
            $resp = "B00000";
        elseif(ctype_alnum($precio) || !is_float($precioFloat) && $precioFloat <= 0)
            $resp = "C00000";
        elseif(!ctype_digit($stock) || !is_int($stockInt) || ($stockInt <= 0 && $stockInt > 1000))
            $resp = "D00000";

        switch($resp)
        {
            case 'A00000':
                $index = -1;
                break;
            case 'B00000':
                $index = -2;
                break;
            case 'C00000':
                $index = -3;
                break;
            case 'D00000':
                $index = -4;
                break;
            default:
                $index = 1;
        }

        return $index;
    }

    function guardarUsuario($conection,$nombre, $apellido, $email, $clave)
    {
        $sql = "INSERT INTO usuarios (nombre,apellido,email,clave) VALUES (?,?,?,?)";
        $resultado = $conection->prepare($sql);

        if(validarUsuario($nombre,$apellido,$email) == -1)
        {
            echo "<h3>El nombre ingresado no es valido.</h3>";
            return false;
        }
        if(validarUsuario($nombre,$apellido,$email) == -2)
        {
            echo "<h3>El apellido ingresado no es valido.</h3>";
            return false;
        }
        if(validarUsuario($nombre,$apellido,$email) == -3)
        {
            echo "<h3>El email ingresado no es valido.</h3>";
            return false;
        }

        $resultado->bindParam(1,$nombre,PDO::PARAM_STR,30);
        $resultado->bindParam(2,$apellido,PDO::PARAM_STR,30);
        $resultado->bindParam(3,$email,PDO::PARAM_STR,40);
        $resultado->bindParam(4,$clave,PDO::PARAM_STR,40);

        if($resultado->execute())
            return true;

        return false;
    }

    function validarUsuario($nombre,$apellido,$email)
    {
        $resp = "";
        $index = 0;

        if(!is_string($nombre) || ctype_digit($nombre) || ctype_alnum($nombre) && strlen($nombre) < 3)
            $resp = "A00000";
        if(!is_string($apellido) || ctype_digit($apellido) || ctype_alnum($apellido) && strlen($apellido) < 3)
            $resp = "B00000";
        if(!is_string($email) || ctype_digit($email) || !ctype_alnum($email) && strlen($email) < 8)
            $resp = "C00000";

        switch($resp)
        {
            case 'A00000':
                $index = -1;
                break;
            case 'B00000':
                $index = -2;
                break;
            case 'C00000':
                $index = -3;
                break;
            default:
                $index = 1;
        }

        return $index;
    }   

    
?>
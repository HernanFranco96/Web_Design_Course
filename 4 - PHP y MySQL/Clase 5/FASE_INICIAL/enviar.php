<?php
    echo "holaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa";
    print "HOLA";
    /*
    $nombre = $_POST['nombre'];
    strtolower($nombre);
    $email = $_POST['email'];
    strtolower($email);
    $mensaje = $_POST['mensaje'];
    strtolower($mensaje);
    //Validar el formulario
    validacionForm();
    // Validacion del nombre
  
    if(isset($nombre) && is_string($nombre) && strlen($nombre) >= 3 && ctype_alpha($nombre) == true)
    {
        header("location:./index.php?page=contacto&correcto=A0C000");
    }
    if(ctype_alnum($nombre) && ctype_alpha($nombre) == false) //Si es alfanumerico pero si no es solamente alfabetico.
    {
        header("location:./index.php?page=contacto&error=A0C001");
    }
    if(ctype_digit($nombre))
    {
        header("location:./index.php?page=contacto&error=A0C002");
    }
    if(strlen($nombre) < 3)
    {
        header("location:./index.php?page=contacto&error=A0C003");
    }

    // Validacion del email

    if(isset($email) && is_string($email) && strlen($email) >= 16 && strlen($email) <= 40 && filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        header("location:./index.php?page=contacto&correcto=B0C000");
    }
    if(strlen($email) < 16)
    {
        header("location:./index.php?page=contacto&error=B0C001");
    }
    
    
    // Validacion del mensaje
    if(isset($mensaje) && is_string($mensaje) && strlen($mensaje) > 0 && ctype_alnum($mensaje) == true)
    {
        header("location:./index.php?page=contacto&correcto=C0C000");
    }
    if(strlen($mensaje) >= 300)
    {
        header("location:./index.php?page=contacto&error=C0C001");
    }

    $destinatario = "hernan.franco051096@gmail.com";
    $asunto = "Contacto Web";
    $cuerpo = "
            <h1>Nuevo Correo</h1>
            Alguien lleno el formulario web<br>
            <strong>Nombre:</strong>'.$nombre.'<br>
            <strong>Email:</strong>'.$email.'<br>
            <strong>Mensaje:</strong>'.$mensaje.'<br>
            ";
    $cabecera = "From:" . $email . "\r\n";
    $cabecera.= "MIME-Version: 1.0\r\n";
    $cabecera.= "Content-Type: text/html; charset=UTF-8\r\n";

    if(mail($destinatario,$asunto,$cuerpo,$cabecera))
    {
        header("location:./index.php?page=contacto&correcto=D0C000");
    }
    else{
        header("location:./index.php?page=contacto&error=D0C001");
    }

    */
?>
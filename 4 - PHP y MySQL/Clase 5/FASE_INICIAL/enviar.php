<?php
    include("funciones.php");
    
    $nombre = $_POST['nombre'];
    strtolower($nombre);
    $email = $_POST['email'];
    strtolower($email);
    $mensaje = $_POST['mensaje'];
    strtolower($mensaje);
 
    $codigo = validarFormulario($nombre,$email,$mensaje);

    $mensaje = mostrarMensaje($codigo);
 
    if($mensaje != "")
    {
        if(substr($codigo,-1) == "0")
            header("location:./index.php?page=contacto&correcto=$mensaje"); //&nombre=$nombre
        else
            header("location:./index.php?page=contacto&error=$mensaje");
    }
    
?>
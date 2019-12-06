<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicios</title>
</head>
<body>
<?php

    // Variable constante
    //define("PI",3.1416);
    //echo PI;

    $host = "localhost";
    $db = "practicapd0";
    $user = "root";
    $pass = "";

    // Esto nos permite trabajar desde objetos de datos.

    //1- Nombre del hosting
    //2- Nombre de la base de datos
    //3- Nombre del usuario
    //4- Contraseña
    try
    {
        $conection = new PDO("mysql:host=$host; dbname=$db", $user, $pass);
        echo "<h1>Conectado a la base de datos</h1>";    
    }
    catch(PDOException $e)
    {
        echo "<h1>Error no puedo conectarme con la base de datos: ".$e->getMessage()."</h1";
    }
    
    
?>
</body>
</html>
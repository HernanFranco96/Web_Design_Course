<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lectura y Escritura de archivos</title>
</head>
<body>
<?php

    $archivo = "archivo.txt";

    /*
        a : Abre el archivo de modo lectura y escritura. Sino existe lo crea.
        r : Solo lectura
        w : Solo escritura
        + : Agregandole el signo mas puede escribir y leer.
    */

    //Es recomendado agregar el arroga para evitar errores de php.

    // Abrimos el archivo.
    if(!@$f = fopen($archivo, "r")){ 
        echo "No pudo abrise el archivo.";
    }

    //Leemos el archivo
    echo fread($f, 4000);
    fclose($f);

    // Escribimos el archivo.
    /*
    for($i=1;$i<=10;$i++)
    {
        if(!fwrite($f, " | Texto Nro: $i" . PHP_EOL)){ //Salto de linea
            echo "No pudo escribir el archivo.";
            break;
        }
        if($i == 10)
        {
            echo "Escribimos correctamente.";
            fclose($f);
        }
    }
    */



?>
</body>
</html>
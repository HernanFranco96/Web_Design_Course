<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lectura y Escritura de archivos</title>
    <style>
        div{
            background-color: red;
            width: 100px;
            height: auto;
            margin: 20px auto;
            border: 2px solid #000;
            border-radius: 5px;
            text-align: center;
            font-size: 30;
        }
    </style>
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
    while(!feof($f)){
        $linea = "<div>".fgets($f)."<br></div>"; //fgets lee la linea.
        echo $linea;
    }
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

    /*
        Asi accedemos al servidor. Y nos conectamos a la base de datos.
        mysql -h localhost -u root -p 

        Nos muestra todas las bases de datos
        show databases;

        Creamos base de datos
        create database nombre_base_datos;

        Seleccionamos la BD
        use nombre_base_datos;

        Creamos la tabla alumnos
        create table alumnos (dni int(8), nombre varchar(20), correo varchar(40), direccion varchar(40), PRIMARY KEY(dni));

        Mostramos tabla 
        describe alumnos;

        Muestra el nombre de nuestras tablas
        show tables;

        Ingresamos datos a nuestra tabla
        insert into alumnos values (13254687,"Hernan","zaraza@gmail.com","logi 502");

        Mostramos todos los datos de la tabla.
        select * from alumnos;

        Si queremos buscar un dato en especifico.
        select * from alumnos where dni = 1231231;

        Cambiamos el nombre donde se encuentre el dni
        update alumnos set nombre = "Ana" where dni = 13254687
    */

?>
</body>
</html>
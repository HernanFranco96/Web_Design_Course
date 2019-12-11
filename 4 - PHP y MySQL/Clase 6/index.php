<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicios</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Roboto&display=swap');
        table{
            font-family: 'Roboto', sans-serif;
        }
        td{
            border:none;
        }
        .caja{
            width: 1000px;
            margin: 30px auto;
            text-align: center;
            font-size: 20px;
            border: none;
        }
        .titulo{
            border: none;
        }
        .id{
            background-color: #D5D8DC;
            width: 200px;
            padding: 20px;
            margin-bottom: 10px;
            border-radius: 6px;
            margin-right: 2px;
        }
        .nom{
            background-color: #D2B4DE;
            width: 200px;
            padding: 20px;
            margin-bottom: 10px;
            border-radius: 6px;
            margin-right: 2px;
        }
        .ape{
            background-color: #ABEBC6;
            width: 200px;
            padding: 20px;
            margin-bottom: 10px;
            border-radius: 6px;
            margin-right: 2px;
        }
        .co{
            background-color: #AED6F1;
            width: 200px;
            padding: 20px;
            margin-bottom: 10px;
            border-radius: 6px;
            margin-right: 2px;
        }
        .eli{
            background-color: red;
            width: 200px;
            padding: 20px;
            margin-bottom: 10px;
            border-radius: 6px;
            margin-right: 2px;
        }
        a{
            text-decoration: none;
            color: white;
        }
        h1{
            width: 450px;
            background-color: #EC2121;
            text-align: center;
            margin: auto;
        }
    </style>
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
            
        // Haciendo una consulta a la base de datos.
        $sql = "SELECT id, nombre, apellido, correo FROM usuarios";

        $stmt = $conection->query($sql); // $conection->prepare($sql);

    ?>
        <table class='caja' border='1' cellpaging='0'>
        <tr class='titulo'>
            <td>ID</td>
            <td>NOMBRE</td>
            <td>APELLIDO</td>
            <td>CORREO</td>
            <td>ACCION</td>
        </tr>
    <?php
        while($value = $stmt->fetch(PDO::FETCH_ASSOC)) //Creamos un arreglo. En caso de usar prepare usar foreach
        {
            ?>
                <tr>
                    <td class="id"><?php echo $value['id'] ?></td>
                    <td class="nom"><?php echo $value['nombre'] ?></td>
                    <td class="ape"><?php echo $value['apellido'] ?></td>
                    <td class="co"><?php echo $value['correo'] ?></td>
                    <td class="eli">
                        <a href="?id=<?php echo $value['id']?>">ELIMINAR</a>
                    </td>
                </tr>
            <?php
        }
    ?>
    </table>
    <?php

    //ELIMINAMOS UN USUARIO
    if(isset($_GET['id']))
    {
        $sql = "DELETE FROM usuarios WHERE id=?"; //El ? equivale a una variable. En caso de que sean varias seria ?,?,?
        $id = "5";
        $resultado = $conection->prepare($sql);
        $resultado->bindValue(1,$id,PDO::PARAM_INT); //Preparamos un parametro para tener mas seguridad.
 
        if($resultado->execute())
        {
            echo "<h5>MENSAJE BORRADO EXITOSAMENTE</h5>";
        }
        else
        {
            echo "no se borro";
        }
    }

    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 1</title>
</head>
<body>

    <form action="" method="get">
        <input type="text" name="nombre" id="">
        <input type="text" name="apellido" id="">
        <input type="submit" value="Aceptar" name="enviar">
    </form>


    <?php

        if(isset($_GET['enviar'])){
            $nombre = $_GET['nombre'];
            $apellido = $_GET['apellido'];

            echo "<div>Hola ".$nombre." ".$apellido."</div>";
        }
    ?>
</body>
</html>
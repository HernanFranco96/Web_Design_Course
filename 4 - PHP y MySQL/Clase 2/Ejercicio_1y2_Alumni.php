<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 1</title>
    <style>
        .mostrar{
            background-color: green;
            border-radius: 3px;
            width: 300px;
            text-align: center;
            padding: 20px;
        }
        .error{
            background-color: red;
            border-radius: 3px;
            width: 300px;
            text-align: center;
            padding: 20px;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <label for="">Ingrese nombre: </label>
        <input type="text" name="nombre"><br>
        <label for="">Ingrese contraseña: </label>
        <input type="password" name="contraseña"><br>
        <input type="submit" value="Aceptar" name="enviar">
    </form>

<?php
    if(isset($_POST['enviar']))
    {
        if($_POST['nombre'] == "admin" && $_POST['contraseña'] == "123")
        {
            echo "<div class='mostrar'>Bienvenido ".$_POST['nombre']."</div>";
        }
        else
        {
            echo "<div class='error'>Usuario o Contraseña incorrecta!</div>";
        }
    }
?>
</body>
</html>
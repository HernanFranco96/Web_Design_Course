<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 5</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="num1" size="10"><br>
        <input type="text" name="num2" size="10"><br>
        <label for="">Seleccione una operacion: </label><br>
        <label for="">Suma: </label>
        <input type="radio" name="operacion" value="suma"><br>
        <label for="">Resta: </label>
        <input type="radio" name="operacion" value="resta"><br>
        <label for="">Multiplicar: </label>
        <input type="radio" name="operacion" value="multiplicar"><br>
        <label for="">Division: </label>
        <input type="radio" name="operacion" value="dividir"><br>
        <input type="submit" value="Aceptar" name="enviar"><br>
    </form>

<?php
    if(isset($_POST['enviar']))
    {
        $operacion = $_POST['operacion'];

        switch($operacion)
        {
            case "suma":
                echo $_POST['num1'] + $_POST['num2'];
            break;
            case "resta":
                echo $_POST['num1'] - $_POST['num2'];
            break;
            case "multiplicar":
                echo $_POST['num1'] * $_POST['num2'];
            break;
            case "dividir":
                if($_POST['num2'] != 0)
                echo $_POST['num1'] / $_POST['num2'];
                else
                    echo "No se puede dividir por 0";
            break;
        }
    }
?>
</body>
</html>
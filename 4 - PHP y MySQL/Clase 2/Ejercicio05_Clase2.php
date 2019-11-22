<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 6</title>
    <style>
        input{
            margin-bottom: 20px;
        }
        table{
            background-color: #E1E1E0;
            border: 1px solid #000;
        }
        .columna1{
            border-right: 1px solid #000;
        }
        td{
            width: 70px;
            text-align:center;
        }
        .error{
            background-color: red;
            color: white;
            padding: 10px;
            width: 250px;
            margin-top: 10px;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <label>Ingrese un numero: </label>
        <input type="number" name="numero">
        <input type="submit" value="Calcular" name="enviar">
    </form>

<?php
    if(isset($_POST['enviar']))
    {
        $numero = $_POST['numero'];
        $resultado = 0;

        if($numero > 0 && $numero <= 10){
            for($i=1;$i<=10;$i++)
            {
                $resultado = $numero*$i;
                echo    "<table>
                            <tr>
                                <td class='columna1'>".$numero." x ".$i."</td>
                                <td>".$resultado."</td>
                            </tr>
                        </table>";
            }
        }
        else{
            echo "<div class='error'>El numero debe ser entre 0 y 10.</div>";
        }
    }
?>
</body>
</html>
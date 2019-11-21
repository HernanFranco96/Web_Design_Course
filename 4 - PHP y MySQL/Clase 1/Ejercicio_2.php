<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 2</title>
    <style>
        td{
            border: 1px solid #000;
        }
    </style>
</head>
<body>
    <form action="" method="get">
        <label for="">Precio Nro°1: </label>
        <input type="number" name="numero1" id="">
        <br>
        <label for="">Precio Nro°2: </label>
        <input type="number" name="numero2" id="">
        <br>
        <label for="">Precio Nro°3: </label>
        <input type="number" name="numero3" id="">
        <br>
        <input type="submit" value="Enviar" name="enviar">
    </form>

    <?php
        if(isset($_GET['enviar'])){
            $numero_1 = $_GET['numero1'];
            $numero_2 = $_GET['numero2'];
            $numero_3 = $_GET['numero3'];

            $iva = 21;

            $num_1 = ($numero_1 * $iva) / 100; 
            $num_2 = ($numero_2 * $iva) / 100;
            $num_3 = ($numero_3 * $iva) / 100;

            echo "
                <table style='border: 1px solid #000;'>
                    <tr style='background-color: yellow;'>
                        <td>Variable</td>
                        <td>Valor sin IVA</td>
                        <td>Valor con IVA</td>
                    </tr>
                    <tr>
                        <td>x1</td>
                        <td>".$numero_1."</td>
                        <td>".$num_1."</td>
                    </tr>
                    <tr>
                        <td>x2</td>
                        <td>".$numero_2."</td>
                        <td>".$num_2."</td>
                    </tr>
                    <tr>
                        <td>x3</td>
                        <td>".$numero_3."</td>
                        <td>".$num_3."</td>
                    </tr>
                </table>";

        }
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 3</title>
    <style>
        table{border:1px solid #000;margin:auto;}
        .caja1{width:100px;background-color: violet; height:100px;border:1px solid #000;}
        .caja2{width:100px;background-color: green; height:100px;border:1px solid #000;}
    </style>
</head>
<body>
    <table>
        <?php
            $cantFilas = 0;
            $filas = 6;
            $columna = 10;

            $html = "";

            while($cantFilas < $filas)
            {
                $cantFilas++;
                $cantColumnas = 0;

                $html = $html . "<tr class='caja1'>";
                while($cantColumnas < $columna)
                {
                    $cantColumnas++;
                    if($cantFilas%2==0)
                        $html = $html . "<td class='caja1'></td>"; 
                    if($cantFilas%2!=0)
                        $html = $html . "<td class='caja2'></td>"; 
                }    
                $html = $html . "</tr>";
            }

            echo $html;
        ?>
    </table>
</body>
</html>
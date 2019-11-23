<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 3</title>
    <style>
        table{border:1px solid #000;margin:auto;}
        .caja1{width:100px;background-color: pink; height:100px;border:1px solid #000;}
        .caja2{width:100px;background-color: grey; height:100px;border:1px solid #000;}
    </style>
</head>
<body>

    <table>
        <?php
            for($fila=1;$fila<=6;$fila++)
            {
                if($fila%2!=0)
                {
                    echo "<tr class='caja1'>";
                    for($columna=0;$columna<10;$columna++)
                    {
                        echo "<td class='caja1'></td>";
                    }
                    echo "</tr>";
                }
                else if($fila%2==0)
                {
                    echo "<tr class='caja2'>";
                    for($columna=0;$columna<10;$columna++)
                    {
                        echo "<td class='caja2'></td>";
                    }
                    echo "</tr>";
                }    
            }
        ?>
    </table>

</body>
</html>
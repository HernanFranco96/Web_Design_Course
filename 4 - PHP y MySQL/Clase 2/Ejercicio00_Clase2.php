<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Clase 2</title>
    <style> 
        .titulo{
            background-color: #F3EF96;
        }
        table{
            background-color: #E1E1E0;
            border: 1px solid #000;
        }
        td{
            width: 300px;
            text-align: center;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <label>Escriba el monto a invertir:</label>
        <input type="text" name="dinero" id="" require="required" size="5">
        <br>
        <input type="submit" value="CALCULAR" name="enviar">
        <br>
    </form>
<?php

    if(isset($_POST['enviar']))
    {
        $dinero = $_POST['dinero'];

        echo "<table class='titulo'>
                <tr>
                    <td>Mes</td>
                    <td>Dinero (Sumando 2% de interes)</td>
                </tr>
            </table>";
        for($i = 1;$i <= 12;$i++){
            $dinero = $dinero * 1.02;
            echo    "<table>
                        <tr>
                            <td>".$i."</td>
                            <td>".$dinero."</td>
                        </tr>
                    </table>";
            
        }

  
    }

?>
</body>
</html>
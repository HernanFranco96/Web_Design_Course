<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Introducciòn a PHP</title>
</head>
<body>
    
    <?php
    /**************************************** VARIABLES **********************************************/
    /*
        Comentario 
        de 
        varias
        lineas
    */

    //Tipos de datos: String, int, float, boolean, object
    // + - * / %

        //$num1 = 9;
        //$num2 = 2;
        
        //$num2 = ++$num1; Incrementa y luego asigna. Resultado 10
        //$num2 = $num1++; Asigna y luego incrementa. Resultado 9

        //$num2 += $num1; Es lo mismo que decir $num2 = $num2 + $num1;

        //echo $num1;

        //echo $num1 + $num2; //Suma
        //echo "Concatenando: ".$num1 . $num2; //Concatena con .

        /**************************************** ESTRUCTURA DE CONTROL IF **********************************************/
        $x = 10;
        $y = 5;

        //< > <= >= == != === !==
        
        if ($x > $y) {
            echo "X es mayor a Y";
        }
        else{
            echo "Y es mayor a X";
        }
    ?>
</body>
</html>
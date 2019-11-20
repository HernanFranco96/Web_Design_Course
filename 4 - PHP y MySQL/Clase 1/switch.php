<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Switch</title>
    <style>
        .estilo{
            background-color:blue; 
            color:yellow; 
            width: 25px; 
            margin: auto; 
            margin-bottom: 20px; 
            text-align:center;
        }
    </style>
</head>
<body>
    <?php

        $edad = 22;

        switch($edad){
            case 22:
                echo "Eres mayor de edad";
                break;
            default:
                echo "la edad no es valida";
                break;
        }
    ?>
</body>
</html>
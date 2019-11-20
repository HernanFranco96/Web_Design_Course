<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Switch</title>
    <style>
        .estilo{
            background-color:black; 
            color:white; 
            width: 600px; 
            margin: auto; 
            margin-bottom: 20px; 
            margin-top: 50px;
            text-align:center;
            padding: 20px;
            font-size: 20px;
            border: 3px solid grey;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <?php

        $cantidad_monedas = 22;

        switch($cantidad_monedas){
            case 22:
                echo "<div class='estilo'>TIENES ACCESO <br> | Montaña Rusa | Calesita | Tren del miedo |</div>";
                break;
            case 15:
                echo "<div class='estilo'>TIENES ACCESO <br> | Calesita | Tren del miedo |</div>";
                break;
            case 10:
                echo "<div class='estilo'>TIENES ACCESO <br> | Tren del miedo |</div>";
                break;
            default:
                echo "No tienes monedas.";
                break;
        }
    ?>
</body>
</html>
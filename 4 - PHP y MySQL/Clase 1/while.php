<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>While</title>
</head>
<body>
    <?php

        $x = 1;

        /*while($x <= 100){
            if($x%2 == 0){
                echo "<div style='background-color:red; 
                color:white; 
                width: 25px; 
                margin: auto; 
                margin-bottom: 20px; 
                text-align:center;'>
                $x<br>
                </div>";
            }
            $x++;
        }*/

        do{
            echo "<div style='background-color:red; 
                color:white; 
                width: 25px; 
                margin: auto; 
                margin-bottom: 20px; 
                text-align:center;'>
                $x<br>
                </div>";
        }while($x > 10);

    ?>
</body>
</html>
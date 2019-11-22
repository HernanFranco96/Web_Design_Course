<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 2</title>
</head>
<body>

    <form action="" method="post">
    <?php
        for($i=1;$i<=10;$i++)
        {
            echo'<input type="text" name="nombre'.$i.'" required="required" size="30" placeholder="nombre '.$i.'"><br>';
        }
    ?>
        <input type="submit" value="IMPRIMIR" name="enviar">
    </form>
<?php
    if(isset($_POST['enviar']))
    {
        for($j=1;$j<=10;$j++){
            echo $_POST['nombre'.$j]."<br>";
        }
    }
?>
</body>
</html>
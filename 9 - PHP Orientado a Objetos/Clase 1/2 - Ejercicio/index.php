<?php
    // Verificar Fire Cool
    require 'funciones.php';
    require 'Persona.php';
    $Persona = new Persona;

    //NO SE DEBE HACER, DEJAMOS LOS ATRIBUTOS SIN DEFENSA.
    //$Persona->nombre = 'Hernan';
    //$Persona->apellido = 'Franco';
    
    mostrar($Persona)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Vista Persona</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <h1>Vista Persona</h1>

<?php
    echo $Persona->verDatos();
?>
</body>
</html>

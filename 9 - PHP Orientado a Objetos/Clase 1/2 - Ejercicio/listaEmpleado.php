<?php
    require 'Persona2.php';
    require 'Empleado.php';

    $Empleado = new Empleado("Hernan","Franco");
    $Empleado->setSueldo(32000);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Empleado</title>
</head>
<body>
    <h1>Ejemplo de herencia</h1>
    <?php echo $Empleado->verDatos(); ?>
</body>
</html>
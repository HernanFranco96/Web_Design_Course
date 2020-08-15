<?php
    // Verificar Fire Cool
    require 'funciones.php';
    require 'Persona2.php';
    $Persona2 = new Persona2("Hernan","Franco");

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
    echo $Persona2->verDatos();
?>
</body>
</html>

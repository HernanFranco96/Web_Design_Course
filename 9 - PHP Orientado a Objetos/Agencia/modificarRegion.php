<?php
    require 'Clases/Conexion.php';
    require 'Clases/Region.php';
    $Region = new Region;
    $chequeo = $Region->modificarRegion();

    $css = 'danger';
    $mensaje = 'No se ha modificado datos de la region.';

    if($chequeo)
    {
        $css = 'success';
        $mensaje = 'Region: '.$Region->getRegNombre().' modificada correctamente';
    }
    include 'includes/header.php';
?>

    <main class="container">
        <h1>Modificacion de una Region</h1>

        <div class="alert alert-<?= $css ?> p-4">
            <?= $mensaje ?>
            <br>
            <a href="adminRegiones.php" class="btn-btn-outline-secondary">
                Volver a panel regiones
            </a>
        </div>
    </main>

<?php
    include 'includes/footer.php';
?>

<!--
    TAREA: HACER AGREGARREGION()
-->
<?php
    require 'config/config.php';
    $Region = new Region;

    $mensaje = 'No se ha agregado la region.';
    $color = 'danger';

    if($chequeo = $Region->agregarRegion())
    {
        $mensaje = 'Region '.$Region->getRegNombre().' agregada correctamente;';
        $color = 'success';
    }

    include 'includes/header.php';
?>

    <main class="container">
        <h1>Alta de una nueva región</h1>

        <div class="alert alert-<?=$color;?>">
            <?=$mensaje?>
        </div>
    </main>

<?php
    include 'includes/footer.php';
?>
<?php
    if(isset($_GET['page']))
    {
        $page = $_GET['page'];
    }else{
        $page = 'panel';
    }
    include('../funciones.php');
    include('header.php');
?>
<section id="page">
    <?php
        mostrarPage($page);
    ?>
</section>

		
<?php
    if(isset($_GET['page']))
    {
        $page = $_GET['page'];
    }else{
        $page = 'inicio';
    }
    include('header.php');
    include('funciones.php');
?>
<section id="page">
    <?php
        //mostrarPage($page);
        include($page.'.php');
    ?>
</section>
<?php
    include('footer.php');
?>  
		
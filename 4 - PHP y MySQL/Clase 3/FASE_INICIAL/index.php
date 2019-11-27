<?php
    if(isset($_GET['page']))
    {
        $page = $_GET['page'];
    }
    include('header.php');
?>
<section id="page">
    <?php
        include($page.".php");
    ?>
</section>
<?php
    include('footer.php');
?>
		
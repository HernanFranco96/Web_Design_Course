<?php
    require 'config/config.php';
    include 'includes/header.php';
?>

    <main class="container">
        <h1>Administrador</h1>

        Bienvenido <?= $_SESSION['usuNombre']; ?>
    </main>

<?php
    include 'includes/footer.php';
?>
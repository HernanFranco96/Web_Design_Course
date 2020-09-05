<?php
    require 'config/config.php';
    include 'includes/header.php';
?>

    <main class="container">
        <h1 class="text-center">Ingreso a Sistema</h1>

        <div class="alert bg-light border col-6 mx-auto">
           <form action="login.php" method="POST">
               Usuario: <br>
               <input type="text" name="usuEmail" class="form-control">
               <br>
               Contraseña: <br>
               <input type="password" name="usuClave" class="form-control">

               <button class="btn btn-dark btn-block mt-4">Ingresar a Sistema</button>
           </form>
        </div>

<?php
   if(isset($_GET['error'])){
?>
   <script>
      Swal.fire(
         'Error de Login',
         'Usuario y/o clave incorrectos',
         'error'
      );
   </script>
<?php 
   }
?>
    </main>

<?php
    include 'includes/footer.php';
?>
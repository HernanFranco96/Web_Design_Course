<?php
    require 'Clases/Conexion.php';
    require 'Clases/Region.php';
    $Region = new Region;
    $Region->verRegionPorID();
    
    include 'includes/header.php';
?>
  
  <main class="container">
          <h1>Modificar región</h1>

          <div class="alert bg-light border round p-4">

              <form action="formModificarRegion.php" method="post">

                  <div class="form-group">
                  <label for="regNombre">Nombre de la región:</label>
                  <input type="text" name="regNombre" 
                        value="<?= $Region->getRegNombre(); ?>"
                        id="regNombre" class="form-control">
                  </div>
                  <input type="hidden" name="regID"
                        value="<?= $Region->getRegID(); ?>">

                  <button class="btn btn-dark">Modificar</button>
                  <a href="adminRegiones.php" class="btn btn-outline-secondary">
                      Volver a panel de regiones
                  </a>
              </form>

          </div>


  </main>
<?php
  include 'includes/footer.php';
?>
<?php
    require 'Clases/Conexion.php';
    require 'Clases/Region.php';

    $Region = new Region();
    $Regiones = $Region->listarRegiones();


    include 'includes/header.php';
?>

    <main class="container">
        <h1>Panel de administracion de regiones</h1>

        <table class="table table-border table-hover table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Region</th>
                    <th colspan="2">
                        <a href="" class="btn btn-dark">
                            Agregar
                        </a>
                    </th>
                </tr>
            </thead>
            <tbody>
<?php
                foreach($Regiones as $region)
                {
?>
                 <tr>
                    <td><?php echo $region['regID']; ?></td>
                    <td><?php echo $region['regNombre']; ?></td>
                    <th colspan="1">
                        <a href="" class="btn btn-outline-secondary">
                            Modificar
                        </a>
                    </th>
                    <th colspan="1">
                        <a href="" class="btn btn-outline-secondary">
                            Eliminar
                        </a>
                    </th>
                </tr>
<?php
                }
?>
            </tbody>
        </table>
    
    </main>

<?php
    include 'includes/footer.php';
?>
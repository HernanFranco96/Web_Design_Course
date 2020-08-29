<?php
    require 'Clases/Conexion.php';
    require 'Clases/Destino.php';

    $Destino = new Destino();
    $Destinos = $Destino->listarDestinos();


    include 'includes/header.php';
?>

    <main class="container">
        <h1>Panel de administracion de regiones</h1>

        <table class="table table-border table-hover table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Destino (aeropuerto)</th>
                    <th>Region</th>
                    <th>Precios</th>
                    <th>Asientos</th>
                    <th>Disponibles</th>
                    <th colspan="2">
                        <a href="fromAgregarDestino.php" class="btn btn-dark">
                            Agregar
                        </a>
                    </th>
                </tr>
            </thead>
            <tbody>
<?php
                foreach($Destinos as $destino)
                {
?>
                 <tr>
                    <td><?php echo $destino['destID']; ?></td>
                    <td><?php echo $destino['destNombre']; ?></td>
                    <td><?php echo $destino['regNombre']; ?></td>
                    <td><?php echo $destino['destPrecio']; ?></td>
                    <td><?php echo $destino['destAsientos']; ?></td>
                    <td><?php echo $destino['destDisponibles']; ?></td>
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
<style>
    table{
        width: 500px;
        margin: auto;
        display: block;
        border: none;
    }
    td{
        text-align: center;
    }
</style>
<?php
    include("conexion.php");

    $sql = "SELECT id, nombre, descripcion, imagen, precio, stock FROM productos";

    $conection->prepare($sql); 

    echo "<table class='caja' border='1' cellpaging='0'";
    echo "<tr class='titulo'>
    <td>ID</td>
    <td>NOMBRE</td>
    <td>DESCRIPCION</td>
    <td>IMAGEN</td>
    <td>PRECIO</td>
    <td>STOCK</td>
    <td>ACCIONES</td>
    </tr>";

    foreach($conection->query($sql) as $value) 
    {
        ?>
            <tr>
                <td class="id"><?php echo $value['id'] ?></td>
                <td class="nom"><?php echo $value['nombre'] ?></td>
                <td class="desc"><?php echo $value['descripcion'] ?></td>
                <td class="img"><img src="..\images\productos\<?php echo $value['imagen']?>" style="width: 50px;"></td>
                <td class="pre">$<?php echo $value['precio'] ?></td>
                <td class="stock"><?php echo $value['stock'] ?></td>
                <td>MODIFICAR - ELIMINAR </td>
            </tr>
        <?php
    }

    /**
     * TAREA
     * AGREGAR UNA COLUMNA MAS PARA ESCRIBIR LA PALABRA MODIFICAR CON URL
     * Y AGREGAR BOTON PARA ELIMINAR DESDE UNA URL
     */
?>
<style>
    table{
        width: 500px;
        margin: auto;
        display: block;
        border: none;
    }
    th{
        border: none;
    }
    td{
        text-align: center;
        height: 30px;
        border: none;
        border-top: 1px solid #000;
        border-bottom: 1px solid #000;
    }
    h5{
        width: 450px;
        background-color: #EC2121;
        text-align: center;
        font-size: 20px;
        margin: auto;
        margin-top: 15px;
        margin-bottom: 20px;
        padding: 20px;
        color: #fff;
    }
</style>
<?php
    include("conexion.php");
?>
    <br><br>
        <a href="index.php?page=productosAdmin">Crear nuevo Producto</a>
    <br><br>
    <table class='caja' cellpaging='0'>
        <tr class='titulo'>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>DESCRIPCION</th>
            <th>IMAGEN</th>
            <th>PRECIO</th>
            <th>STOCK</th>
            <th>ACCIONES</th>
        </tr>
    <?php

    $sql = "SELECT id, nombre, descripcion, imagen, precio, stock FROM productos";
    $conection->prepare($sql); 
    foreach($conection->query($sql) as $value) 
    {
        ?>
            <tr>
                <td><?php echo $value['id'] ?></td>
                <td><?php echo $value['nombre'] ?></td>
                <td><?php echo $value['descripcion'] ?></td>
                <td><img src="..\images\productos\<?php echo $value['imagen']?>" style="width: 50px;"></td>
                <td>$<?php echo $value['precio'] ?></td>
                <td><?php echo $value['stock'] ?></td>
                <td>
                    <a href="?id=<?php echo $value['id']?>">ELIMINAR</a>
                </td>
            </tr>
        <?php
    }
?>
</table>
<?php
     //ELIMINAMOS UN USUARIO
    if(isset($_GET['id']))
    {
        $id = $_GET['id'];
        if(borrar($conection,$id))
        {
            echo "<h5>PRODUCTO ELIMINADO EXITOSAMENTE</h5>";
        }
        else
        {
            echo "<h5>NO SE PUDO ELIMINAR</h5>";
        }

    }
?>
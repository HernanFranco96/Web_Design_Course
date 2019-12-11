<?php
    /*
    //METODO 1
    //ELIMINAMOS UN USUARIO
    //Asi mismo sirve para insertar y modificar
    if(isset($_GET['id']))
    {
        $sql = "DELETE FROM usuarios WHERE id =".$_GET['id']; //Hacemos la consulta para eliminar el usuario

        if($conection->exec($sql)) //Nos permite eliminar, insertar o modificar un dato.
        {
            header('location:index.php?mensaje=PRODUCTO ELIMINADO EXITOSAMENTE');
        }
    }
    if(isset($_GET['mensaje']))
    {
        echo "<h5>".$_GET['mensaje']."</h5>";
    }

    //METODO 2
    //ELIMINAMOS UN USUARIO
    //Este metodo es mas efectivo que el anterior
    $sql = "DELETE FROM usuarios WHERE id=:id"; //Hacemos la consulta para eliminar el usuario
    $id = $_GET['id'];
    $resultado = $conection->prepare($sql);
    $resultado->bindParam(':id',$id,PDO::PARAM_INT,11); //Preparamos un parametro para tener mas seguridad.

    if($resultado->execute())
    {
        echo "<h5>MENSAJE BORRADO EXITOSAMENTE</h5>";
    }
    else
    {
        echo "no se borro";
    }

    //METODO 3
    //ELIMINAMOS UN USUARIO
    //Este metodo es identico al anterior a excepcion de los ? en el DELETE y bindParam llevara el numero de la variable y no puede llevar la cantidad al final.
    $sql = "DELETE FROM usuarios WHERE id=?"; //El ? equivale a una variable. En caso de que sean varias seria ?,?,?
        $id = $_GET['id'];
        $resultado = $conection->prepare($sql);
        $resultado->bindParam(1,$id,PDO::PARAM_INT); //Preparamos un parametro para tener mas seguridad.
 
        if($resultado->execute())
        {
            echo "<h5>MENSAJE BORRADO EXITOSAMENTE</h5>";
        }
        else
        {
            echo "no se borro";
        }

         //METODO 4
        //ELIMINAMOS UN USUARIO
        //Este metodo es identico al anterior a excepcion de que tenemos que pasar un valor el cual deberiamos saber
    $sql = "DELETE FROM usuarios WHERE id=?"; //El ? equivale a una variable. En caso de que sean varias seria ?,?,?
        $id = "5";
        $resultado = $conection->prepare($sql);
        $resultado->bindValue(1,$id,PDO::PARAM_INT); //Preparamos un parametro para tener mas seguridad.
 
        if($resultado->execute())
        {
            echo "<h5>MENSAJE BORRADO EXITOSAMENTE</h5>";
        }
        else
        {
            echo "no se borro";
        }
    */
?>
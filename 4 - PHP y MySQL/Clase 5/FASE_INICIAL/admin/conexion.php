<style>
    h1{
        background-color: #82E0AA;
        width: 600px;
        margin: 20px auto;
        padding: 5px;
        text-align: center;
    }
</style>

<?php

        $host = "localhost";
        $db = "comerciopractica";
        $user = "root";
        $pass = "";

        try
        {
            $conection = new PDO("mysql:host=$host; dbname=$db", $user, $pass);
            echo "<h1>Conectado a la base de datos</h1>";    
        }
        catch(PDOException $e)
        {
            echo "<h1>Error no puedo conectarme con la base de datos: ".$e->getMessage()."</h1";
        }


?>
<style>
    h1{
        background-color: #82E0AA;
        width: 100px;
        font-size: 15px;
        margin-top: 10px;
        margin-left: 2px;
        padding: 5px;
        text-align: center;
        border-radius: 3px;
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
            echo "<h1>Conectado</h1>";    
        }
        catch(PDOException $e)
        {
            echo "<h1>Error no puedo conectarme con la base de datos: ".$e->getMessage()."</h1";
        }
?>
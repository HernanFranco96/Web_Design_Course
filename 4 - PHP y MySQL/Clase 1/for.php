<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FOR</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Alata&display=swap');
        .estilo{
            background-color:black; 
            color:white; 
            width: 50px; 
            margin-right: 20px;
            margin-bottom: 20px; 
            margin-top: 50px;
            text-align:center;
            padding: 20px;
            font-size: 20px;
            border: 3px solid grey;
            border-radius: 5px;
            display: inline-block;
        }
        .estilo2{
            background-color:blue; 
            color:yellow; 
            width: 50px; 
            margin-right: 20px;
            margin-bottom: 20px; 
            margin-top: 50px;
            text-align:center;
            padding: 20px;
            font-size: 20px;
            border: 3px solid grey;
            border-radius: 5px;
            display: inline-block;
        }
        .formulario{
            height: 200px;
            width: 300px;
            margin:auto;
            margin-top:100px;
            background-color: grey;
        }
        .formulario > label{
            width: 300px;
            margin: auto;
            margin-left: 10px;
            display: block;
            color: white;
            font-size: 25px;
            margin-top: 10px;
        }
        .formulario > input{
            width: 80%;
            margin: auto;
            padding: 5px;
            display: block;
            margin-bottom: 20px;
        }
        .boton{
            background-color: white;
            color: black;
            font-size: 20px;
            border: 1px solid black;
            border-radius: 5px;
        }
        .boton:hover{
            background-color: #D1CBCA;
        }
        .respuesta{
            font-family: 'Alata', sans-serif;
            text-align: center;
            width: auto;
            margin: auto;
            margin-top: 50px;
            font-size: 30px;
            color: #2C2220;
        }
    </style>
</head>
<body>

    <form action="" method:"GET" enctype="multipart/form-data" class="formulario">
        <label for="usuario">Usuario: </label>
            <input type="text" name="usuario" id="">
     
        <label for="contraseña">Contraseña: </label>
            <input type="password" name="contraseña" id="">
      
        <input class="boton" type="submit" value="ACCEDER AL SISTEMA" name="enviar">
    </form>



    <?php

        if(isset($_GET['enviar'])){
            $usuario = $_GET['usuario'];
            $password = $_GET['contraseña'];

            if($usuario == "admin" && $password == "1234"){
                echo "<div class='respuesta'>Bienvenido querido usuario.</div><br>";
            }else if($usuario == "admin" && $password != "1234"){
                echo "<div class='respuesta'>La contraseña no es correcta.</div><br>";
            }else if($usuario != "admin" && $password == "1234"){
                echo "<div class='respuesta'>El nombre de usuario no es correcto.</div><br>";
            }else if($usuario != "admin" && $password != "1234"){
                echo "<div class='respuesta'>Ninguno de los datos son correctos.</div><br>";
            }
            
        }
/*
        for($i=1;$i<=10;$i++){
            if($i%2==0){
                echo "<div class='estilo'>".$i."</div>";
            }
            else{
                echo "<div class='estilo2'>".$i."</div>";
            }
        }
*/
    ?>
</body>
</html>
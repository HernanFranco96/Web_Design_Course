<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Funciones</title>
    <style>
        .resultado{
            width: 200px;
            border-radius: 5px;
            background-color: #AA1BF6;
            color: #fff;
            margin: 20px auto;
            text-align: center;
            padding: 20px;
            font-size: 30px;
        }
        .resultado:hover{
            background-color: #BB6BE5;
        }

        form{
            max-width: 300px;
            width: 100%;
            margin: 30px auto;
            background-color: grey;
            padding: 30px;
        }
        input{
            margin: auto;
            padding: 10px;
            width: 80%;
            margin-bottom: 10px;
            display: block;
        }
        .boton{
            margin: auto;
            text-align: center;
            background-color: #121739;
            color: #fff;
            border: none;
            border-radius: 5px;
        }
        .boton:hover{
            background-color: #666B8E;
        }
        .login{
            width: 300px;
            margin: 30px auto;
            background-color: #11E311;
            color: #fff;
            padding: 30px;
            border-radius: 5px;
            text-align: center;
            font-size: 30px;
        }
        .error{
            width: 300px;
            margin: 30px auto;
            background-color: #A10404;
            color: #fff;
            padding: 30px;
            border-radius: 5px;
            text-align: center;
            font-size: 30px;
        }
    </style>
</head>
<body>

    <form action="" method="post">
        <?php
            form();
        ?>
    </form>
    <?php
        if(isset($_POST['enviar']))
        {
            $nombre = $_POST['nombre'];
            $contraseña = $_POST['contra'];
            login($nombre,$contraseña);
        }        

        function login($n, $p){
            if(($n != "" && $p != "") && $p == "1234"){
                echo "<div class='login'>Bienvenido ".$n."</div>";
            }
            else{
                echo "<div class='error'>Error al querer logiar.</div>";
            }
        }
        
        function input($a,$b){
            echo "<input type='$a' name='$b'>";
        }

        function inputClase($a,$b,$c){
            echo "<input type='$a' name='$b' class='$c' value='ACEPTAR'>";
        }

        function form(){
            error_reporting(0);
            $tipo1 = "text";
            $tipo2 = "password";
            $tipo3 = "submit";
            $info1 = "nombre";
            $info2 = "contra";
            $info3 = "enviar";
            $claseBoton = "boton";
            input($tipo1,$info1);
            input($tipo2,$info2);
            inputClase($tipo3,$info3,$claseBoton);
        }


        /***********************************************************************/
        //$num1 = 40;
        //$num2 = 50;

        //function verificar($x,$y){
        //    if($x > $y)
        //        return "Variable Mayor X = ". $x;
        //    else if($x == $y)
        //        return "Son iguales.";
        //    else
        //        return "Variable Mayor Y = ". $y;
        //}

        //echo "<div class='resultado'>".verificar($num1,$num2)."</div>";
        /**********************************************************************/
        //function mostrar($ruta){
        //    echo "<img src='$ruta' width='1000'></img>";
        //}

        //mostrar("img.jpg");
    ?>
</body>
</html> 
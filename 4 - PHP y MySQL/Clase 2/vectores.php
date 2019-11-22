<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vectores</title>
</head>
<body>
    
<?php

    /* ARREGLO SECUENCIAL 
    $nombre[0] = 'Hernan';
    $nombre[1] = 'Franco';
    $nombre[2] = 'Gaston';
    $nombre[3] = 'Aylen';
    $nombre[4] = 'Camila';

    for($i=0;$i<5;$i++){
        echo $nombre[$i]."<br>";
    }
    */

    /* 
        Otra forma de hacer el vector 
        Podemos hasta indicar en que posicion queremos que se guarde
    
    $apellido = array('Gonzales',1=>'Lopez','Moreno','Regalado');
    */

    /*
    $numeroFlotantes = array(2.5,3.0,1.5,1.7,2.1,3.2,3.1,2.9,1.3,2.5,1.1,2.2);
    $acum = 0;

    for($i=0;$i<count($numeroFlotantes);$i++)
    {
        $acum += $numeroFlotantes[$i];
    }

    echo "Promedio anual de inflaciòn: ".$acum / 12;
    */

    /*
    $nombre = array('Hernan','Franco','Aylen');
    //$nombre[3] = 'Lopez';
    array_push($nombre, 'Lopez'); //Agrega a lo ultimo
    array_unshift($nombre,'Franco'); // Lo agrega en la primera posicion

    // Recorre el array
    foreach($nombre as $i => $valor){
        echo $i." ".$valor."<br>";
    }

    print_r($nombre); // Muestra el array.
    */

    $numero = array(10,20,15,5,20,10,20,30,40,5,20,2);
    $suma = 0;
    $cant = 0;

    foreach($numero as $i => $valor){
        $suma += $valor;
        if($valor == 20)
            $cant++;
    }

    echo "<br>Valor total: ".$suma;
    echo "<br>Cantidad de veintes: ".$cant;

    echo "<br><br><br>";

    //Creamos un array con valor de 1 al 10 con range. Minimo y maximo.
    $x = array(range(1,10));
    print_r($x);
?>
</body>
</html>
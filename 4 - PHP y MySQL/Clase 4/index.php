<?php
//header("location:https://www.clarin.com/");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>practicas </title>
</head>
<body>
<?php

if (isset($_POST['enviar'])) {
	//echo filter_var($_POST['nombre'],FILTER_SANITIZE_STRING);
	//echo md5($_POST['enviar']);
	//echo password_hash($_POST['nombre'], PASSWORD_DEFAULT);
	if(ctype_alpha($_POST['nombre'])){
		echo 'correcto';
	}
	else{
		echo 'es incorrecto';
	}
}
?>	
<form action="" method="POST">
	<input type="text" name="nombre"><br>
	<input type="submit" name="enviar" value="ENVIAR">
</form>
<?php
//$num=2536.236;
//echo number_format($num,2,',','.');
//echo round($num);
//echo floor($num);
//echo ceil($num);
/*rtrim(str);
ltrim(str);
trim(str);*/
?>
</body>
</html>
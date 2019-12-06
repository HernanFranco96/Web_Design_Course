<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Proyecto php</title>
</head>
<body>

	<?php
	// CON ESTO CONSEGUIMOS LA IP DEL CLIENTE.
	if (!empty($_SERVER['HTTP_CLIENT_IP'])) 
	{ 
		$ip = $_SERVER['HTTP_CLIENT_IP']; 
	} 
	elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) 
	{ 
		$ip = $_SERVER['HTTP_X_FORWARDED_FOR']; 
	} 
	else 
	{ 
		$ip = $_SERVER['REMOTE_ADDR']; 
	}
	echo $ip;
	?>

</body>
</html>
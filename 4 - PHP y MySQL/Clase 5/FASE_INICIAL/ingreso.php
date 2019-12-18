<?php
	include('admin/conexion.php');

	if(isset($_POST['enviar']))
	{
		$email = $_POST['email'];
		$clave = $_POST['pass'];

		if(iniciarSesion($conection,$email,$clave) == "A00000")
			echo "<h4>Bienvenido: ". $email."</h4>";
		elseif(iniciarSesion($conection,$email,$clave) == "A00001")
			echo "<h4>La contraseña ingresada no es correcta.</h4>";
		elseif(iniciarSesion($conection,$email,$clave) == "A00002")
			echo "<h4>El usuario no existe.</h4>";
	}
?>		
<div class="account_grid">
	<div class="login-right">
		<h3>INGRESO DE USUARIO</h3>
		<form action="#" method="post">
		<div>
			<span>E-Mail:</span>
			<input type="text" name="email"> 
		</div>
		<div>
			<span>Contraseña:</span>
			<input type="password" name="pass"> 
		</div>
			<input type="submit" value="Ingresar" name="enviar">
			<br>
			<a class="forgot" href="#">¿Olvidaste tu contraseña?</a>
		</form>
	</div>	
	<div class=" login-left">
		<h3>¿NUEVO USUARIO?</h3>
		<a class="acount-btn" href="index.php?page=registro">Crear una cuenta</a>
	</div>
	<div class="clearfix"></div>
</div>
		
			
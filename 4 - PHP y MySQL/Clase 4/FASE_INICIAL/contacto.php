<?php
	// Mensaje Nombre
	if(isset($_GET['correcto']))
	{
		// Mensaje Correcto Nombre
		if($_GET['correcto'] == 'A0C000')
			echo "NOMBRE CORRECTO";
		// Mensaje Correcto Email
		if($_GET['correcto'] == 'B0C000')
			echo "EMAIL CORRECTO";
		// Mensaje Correcto Mensaje
		if($_GET['correcto'] == 'C0C000')
			echo "MENSAJE CORRECTO";
	}
	if(isset($_GET['error']))
	{
		// Mensaje Error Nombre
		if($_GET['error'] == 'A0C001')
			echo "NOMBRE INCORRECTO: No puede contener numeros y letras.";
		if($_GET['error'] == 'A0C002')
			echo "NOMBRE INCORRECTO: No puede contener numeros.";
		if($_GET['error'] == 'A0C003')
			echo "NOMBRE INCORRECTO: El nombre debe contener como minimo mas de 3 caracteres.";

		// Mensaje Error Email
		if($_GET['error'] == 'B0C001')
			echo "EMAIl INCORRECTO: Debe contener mas de 16 caracteres.";

		// Mensaje Error Mensaje
		if($_GET['error'] == 'C0C001')
			echo "MENSAJE INCORRECTO: No puede superar los 300 caracteres.";
		
	}
	
?>

<div class="main"> 
	<div class="reservation_top">
		<div class=" contact_right">
			<h3>Contacto</h3>
			<div class="contact-form">
				<form action="enviar.php" method="post">
					<input type="text" class="textbox" placeholder="Nombre" name="nombre">
					<input type="email" class="textbox" placeholder="E-Mail" name="email">
					<textarea placeholder="Mensaje" name="mensaje"></textarea>
					<input type="submit" value="Enviar" name="enviar">
					<div class="clearfix"></div>
				</form>
			</div>
		</div>
	</div>
</div>
		
		
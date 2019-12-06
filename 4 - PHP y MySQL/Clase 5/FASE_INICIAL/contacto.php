
<div class="main"> 
	<?php
		error_reporting(0);
		
		if($_GET['correcto'])
			echo $_GET['correcto'];
		if($_GET['error'])
			echo $_GET['error'];
	?>
	<div class="reservation_top">
		<div class=" contact_right">
			<h3>Contacto</h3>
			<div class="contact-form">
				<form action="enviar.php" method="post">
					<input type="text" class="textbox" placeholder="Nombre" name="nombre" value="<?php echo $_GET['nombre'];?>">
					<input type="email" class="textbox" placeholder="E-Mail" name="email">
					<textarea placeholder="Mensaje" name="mensaje"></textarea>
					<input type="submit" value="Enviar" name="enviar">
					<div class="clearfix"></div>
				</form>
			</div>
		</div>
	</div>
</div>
		
		
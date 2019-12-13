
	<div class="register">
		<div class="register-top-grid">
<?php
	include("conexion.php");

	if(isset($_POST['enviar'])){
		$nombre = $_POST['nombre'];
		$descripcion = $_POST['descripcion'];
		$precio = $_POST['precio'];
		$stock = $_POST['stock'];

		if(insertarProducto($conection,$nombre,$descripcion,$precio,$stock))
		{
			echo "Producto insertado";
		}			
		else
		{
			echo "<br>No se inserto el producto";
		}
	}
	else{
		echo '<h3>NUEVO PRODUCTO</h3>';
	}
?>
			
			<form action="#" method="post" enctype="multipart/form-data">
				<div class="mation">
					<span>Nombre: <label>*</label></span>
					<input type="text" name="nombre"> 
					<span>Descripción: <label>*</label></span>
					<input type="text" name="descripcion"> 
					<span>Precio: <label>*</label></span>
					<input type="text" name="precio"> 
					<span>Stock: <label>*</label></span>
					<input type="text" name="stock"> 
					<span>Imagen: <label>*</label></span>
					<input type="file" name="imagen"> 
					<div class="register-but">
						<input class="boton" type="submit" value="Registrar Producto" name="enviar">
					</div>
				</div>
			</form>
		</div>
	</div>
</body>
</html>
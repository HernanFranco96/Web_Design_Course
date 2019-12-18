
<div class="register">
	<div class="register-top-grid">
<?php
	include("conexion.php");
	ini_set('display_errors','1'); // Muetra errores
	if($_GET['action']=='add')
	{
		if(isset($_POST['enviar'])){
			$nombre = $_POST['nombre'];
			$descripcion = $_POST['descripcion'];
			$precio = $_POST['precio'];
			$stock = $_POST['stock'];
			
			move_uploaded_file($_FILES["imagen"]["tmp_name"],"../images/productos/".$_FILES["imagen"]["name"]);
			$img = $_FILES["imagen"]["name"]; // Obtenemos el nombre de la imagen.
	
			if(insertarProducto($conection,$nombre,$descripcion,$img,$precio,$stock))
			{
				echo "<h3>Producto insertado.</h3>";
			}			
			else
			{
				echo "<br><h3>No se inserto el producto.<h3>";
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
<?php
	}
	if($_GET['action'] == 'update')
	{
		$sql = "SELECT * FROM productos WHERE id=?";
		
		if(isset($_POST['enviar'])){
			$nombre = $_POST['nombre'];
			$descripcion = $_POST['descripcion'];
			$precio = $_POST['precio'];
			$stock = $_POST['stock'];

			move_uploaded_file($_FILES["imagen"]["tmp_name"],"../images/productos/".$_FILES["imagen"]["name"]);
			$img = $_FILES["imagen"]["name"]; // Obtenemos el nombre de la imagen.
		}
		else
		{
			echo "<h3>Actualizando Producto</h3>";
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
				<input class="boton" type="submit" value="Modificar Producto" name="enviar">
			</div>
		</div>
	</form>
<?php
	}
?>
	
	</div>
</div>
</body>
</html>
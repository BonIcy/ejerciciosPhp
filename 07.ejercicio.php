<!-- 7. Programa que pida el ingreso del nombre y precio de un artículo y la
cantidad que lleva el cliente. Mostrar lo que debe pagar el comprador
en su factura. -->
<!DOCTYPE html>
<html>
<head>
	<title>Factura de Compra</title>
</head>
<body>
	<h1>Factura de Compra</h1>
	<form method="POST" action="07.ejercicio.php">
		<label for="nombre">Nombre del artículo:</label>
		<input type="text" id="nombre" name="nombre" required><br><br>
		
		<label for="precio">Precio del artículo:</label>
		<input type="number" id="precio" name="precio" required><br><br>
		
		<label for="cantidad">Cantidad comprada:</label>
		<input type="number" id="cantidad" name="cantidad" required><br><br>
		
		<input type="submit" value="Generar factura">
	</form>
</body>
</html>
<?php
	$nombre = $_POST['nombre'];
	$precio = $_POST['precio'];
	$cantidad = $_POST['cantidad'];
	
	$total = $precio * $cantidad;
	
	echo "<p>Nombre del artículo: {$nombre}</p>";
	echo "<p>Precio de la unidad: ${$precio}</p>";
	echo "<p>Cantidad comprada: ${$cantidad}</p>";
	echo "<p>Total a pagar: ${$total}</p>";
	?>
	

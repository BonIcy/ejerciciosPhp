<!-- 9. N atletas han pasado a finales en salto triple en los juegos
olímpicos femenino de 2022. Diseñe un programa que pida por
teclado los nombres de cada atleta finalista y a su vez, sus
marcas del salto en metros. Informar el nombre de la atleta
campeona que se quede con la medalla de oro y si rompió
récord, reportar el pago que será de 500 millones. El récord
esta en 15,50 metros. -->
<!DOCTYPE html>
<html>
<head>
	<title>Juegos Olímpicos - Salto Triple Femenino</title>
</head>
<body>
	<h1>Juegos Olímpicos - Salto Triple Femenino</h1>
    <!-- usé php porque no queria poner 10 labels con inputs jaja -->
	<form method="POST" action="09.ejercicio.php">
		<?php
		$atletas = [];
		$n = 1;
		while ($n <= 10) {
			echo "<h2>Atleta N° {$n}</h2>";
			echo "<label for='nombre{$n}'>Nombre:</label>";
			echo "<input type='text' id='nombre{$n}' name='nombre[]' required><br><br>";
			echo "<label for='marca{$n}'>Marca (en metros):</label>";
			echo "<input type='number' id='marca{$n}' name='marca[]' step='0.01' min='0' required><br><br>";
			$n++;
		}
		?>
		<input type="submit" value="Calcular resultados">
	</form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$atletas = [];
	for ($i = 0; $i < count($_POST['nombre']); $i++) {
		$atletas[$i]['nombre'] = $_POST['nombre'][$i];
		$atletas[$i]['marca'] = $_POST['marca'][$i];
	}
	usort($atletas, function($a, $b) {
		return $b['marca'] - $a['marca'];
	});
	$campeona = $atletas[0]['nombre'];
	$marca_campeona = $atletas[0]['marca'];
	$record = false;
	if ($marca_campeona > 15.5) {
		$record = true;
	}
	echo "<h2>Resultados</h2>";
	echo "<p>Atleta campeona: {$campeona}</p>";
	echo "<p>Marca de la atleta campeona: {$marca_campeona} metros</p>";
	if ($record) {
		echo "<p>¡La atleta campeona rompió récord y ganó 500 millones de dólares!</p>";
	} else {
		echo "<p>La atleta campeona no rompió récord</p>";
	}
}
?>

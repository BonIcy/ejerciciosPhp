<!-- 8. Programa con que Ingrese por teclado:
a. el valor del lado de un cuadrado para mostrar por pantalla el
perímetro del mismo
b. la base y la altura de un rectángulo para mostrar el área del
mismo -->
<!DOCTYPE html>
<html>
<head>
	<title>Cálculo de Perímetro y Área</title>
</head>
<body>
	<h1>Cálculo de Perímetro y Área</h1>
	<h2>Cuadrado</h2>
	<form method="POST" action="08.ejercicio.php">
		<label for="lado">Lado del cuadrado:</label>
		<input type="number" id="lado" name="lado" required><br><br>
		<input type="submit" value="Calcular perímetro">
	</form>
	<h2>Rectángulo</h2>
	<form method="POST" action="08.ejercicio.php">
		<label for="base">Base del rectángulo:</label>
		<input type="number" id="base" name="base" required><br><br>
		<label for="altura">Altura del rectángulo:</label>
		<input type="number" id="altura" name="altura" required><br><br>
		<input type="submit" value="Calcular área">
	</form>
</body>
</html>
<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (isset($_POST["lado"])) {
			$lado = $_POST["lado"];
			$perimetro = 4 * $lado;
			echo "<p>Perímetro del cuadrado:  {$perimetro}</p>";
		} elseif (isset($_POST["base"]) && isset($_POST["altura"])) {
			$base = $_POST["base"];
			$altura = $_POST["altura"];
			$area = $base * $altura;
			echo "<p>Área del rectángulo: {$area} </p>";
		}
	}
?>
<!-- 10. Desarrolle un programa cíclico que capture un dato
numérico cada vez, y los vaya acumulando. El programa se
detiene cuando el usuario digita un cero. El programa debe
mostrar: LA SUMATORIA DE LOS VALORES, EL VALOR DEL
PROMEDIO, CUÁNTOS VALORES FUERON DIGITADOS, MAYOR
VALOR Y MENOR VALOR.-->
<!DOCTYPE html>
<html>
<head>
	<title>Formulario final porfin vamoos</title>
</head>
<body>
	<h1>Programa Finall</h1>
	<form method="POST" action="10.ejercicio.php">
    <p>Nota: Al ingresar numeros se pueden seguir añadiendo incluso tras oprimir "Agregar numero", nada de lo puesto anteriormente se borrará, sin embargo, en caso de querer limpiar todos los datos, se puede oprimir el botón de "Limpiar datos" para volver a ingresar valores desde 0, sin que haya nada almacenado.</p>
		<label for="numero">Ingrese un número:</label>
		<input type="number" id="numero" name="numero">
		<input type="submit" name="ejecutar" value="Agregar número"><br><br>
    <label > Mostrar resultados de numeros enviados</label>
		<input type="submit" name="ejecutar" value="Mostrar resultados"><br><br>
    <label>Limpiar datos:</label>
    <button><a href="./11.redireccion.php">Limpiar datos</a></button>
	</form>
</body>
</html>
		<?php
			session_start(); //inicio de sesion, almacenamiento para el usuario
			 //isset verifica que el formulario se haya iniciado, que no sea nulo o indefinido
			if (isset($_POST["ejecutar"])) {
				if ($_POST["ejecutar"] == "Agregar número") {
					$numero = $_POST["numero"];
					if ($numero != 0) { 
						//$_session variable que se usa para almacenar datos en el web server(config, preferencias, detalles de login) 
						array_push($_SESSION["numeros"], $numero); 
					}
				} else if ($_POST["ejecutar"] == "Mostrar resultados") {
					$numeros = $_SESSION["numeros"]; //$_SESSION["numeros"] = [10, 20]
					$suma = array_sum($numeros);
					$promedio = count($numeros) > 0 ? $suma / count($numeros) : 0; //if (?) y else (:)
					$mayor = max($numeros);
					$menor = min($numeros);
					$contador = count($numeros);

					echo "<h2>Resultados:</h2>";
					echo "<p>La sumatoria de los valores es: {$suma}</p>";
					echo "<p>El valor del promedio es: {$promedio}</p>";
					echo "<p>Se ingresaron {$contador} valores</p>";
					echo "<p>El mayor valor es: {$mayor}</p>";
					echo "<p>El menor valor es: {$menor}</p>";
				}
			} else {
				$_SESSION["numeros"] = []; 
			}
		?>
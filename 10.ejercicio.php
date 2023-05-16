<!-- 10. Desarrolle un programa cíclico que capture un dato
numérico cada vez, y los vaya acumulando. El programa se
detiene cuando el usuario digita un cero. El programa debe
mostrar: LA SUMATORIA DE LOS VALORES, EL VALOR DEL
PROMEDIO, CUÁNTOS VALORES FUERON DIGITADOS, MAYOR
VALOR Y MENOR VALOR.-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="10.ejercicio.php">
  <label for="valor">Ingrese un valor:</label>
  <input type="number" name="valor" id="valor">
  <button type="submit">Agregar</button>
</form>
</body>
</html>
<?php
if ($_POST){
  $valores = array();
  $total_valores = 0;
  $promedio = 0;
  $cantidad_valores = 0;
  $mayor_valor = 0;
  $menor_valor = 0;
  
  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $valor = $_POST["valor"];
    
    if ($valor == 0) {
      $total_valores = array_sum($valores);
      $cantidad_valores = count($valores);
      $promedio = $total_valores / $cantidad_valores;
      $mayor_valor = max($valores);
      $menor_valor = min($valores);
    } else {
      $valores[] = $valor;
    }
  }
  if ($cantidad_valores > 0) {
    echo "<p>La sumatoria de los valores es: {$total_valores}</p>";
    echo "<p>El valor del promedio es: {$promedio}</p>";
    echo "<p>La cantidad de valores ingresados es: {$cantidad_valores}</p>";
    echo "<p>El mayor valor ingresado es: {$mayor_valor}</p>";
    echo "<p>El menor valor ingresado es: {$menor_valor}</p>";
  }
}
?>
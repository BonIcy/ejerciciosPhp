<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="06.ejercicio.php" method="post">
  <label>Nombre:</label>
  <input type="text" name="nombre"><br>
  <label>Sexo:</label>
  <select name="sexo">
    <option value="hombre">Hombre</option>
    <option value="mujer">Mujer</option>
  </select><br>
  <label>Nota Definitiva:</label>
  <input type="number" name="nota"><br><br>

  <label>Nombre:</label>
  <input type="text" name="nombre"><br>
  <label>Sexo:</label>
  <select name="sexo">
    <option value="hombre">Hombre</option>
    <option value="mujer">Mujer</option>
  </select><br>
  <label>Nota Definitiva:</label>
  <input type="number" name="nota"><br><br>
  <input type="submit" value="Procesar notas">
</form>
</body>
</html>
<?php
if($_POST){
    $estudiante_mayor_nota = "";
    $estudiante_menor_nota = "";
    $num_hombres = 0;
    $num_mujeres = 0;
    $nota_maxima = 0;
    $nota_minima = 0;
foreach ($_POST['estudiantes'] as $_POST) {
    $nombre = $_POST['nombre'];
    $sexo = $_POST['sexo'];
    $nota = $_POST['nota'];
    if ($sexo == 'Hombre') {
        $num_hombres++;
    } else {
        $num_mujeres++;
    }
    if ($nota > $nota_maxima) {
        $nota_maxima = $nota;
        $estudiante_mayor_nota = $nombre;
    }
    if ($nota < $nota_minima) {
        $nota_minima = $nota;
        $estudiante_menor_nota = $nombre;
    }
}
echo "El estudiante con la mayor nota es: {$estudiante_mayor_nota}<br>";
echo "El estudiante con la menor nota es: {$estudiante_menor_nota} <br>";
echo "El número de hombres es:  {$num_hombres} <br>";
echo "El número de mujeres es: {$num_mujeres}";
}
?>

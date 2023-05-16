<!-- 6. Construir el algoritmo en Javascript para un programa
para cualquier cantidad de estudiantes que lea el nombre,
el sexo y la nota definitiva y halle al estudiante con la mayor
nota y al estudiante con la menor nota y cuantos eran
hombres y cuantos mujeres. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programa de estudiantes</title>
</head>
<body>
<form action="06.ejercicio.php" method="post">
  <label>Nombre:</label>
    <input type="text" name="estudiantes[0][nombre]"><br>
  <label>Sexo:</label>
  <select name="estudiantes[0][sexo]">
    <option value="Hombre">Hombre</option>
    <option value="Mujer">Mujer</option>
  </select><br>
  <label>Nota Definitiva:</label>
  <input type="number" name="estudiantes[0][nota]"><br><br>

  <label>Nombre:</label>
  <input type="text" name="estudiantes[1][nombre]"><br>
  <label>Sexo:</label>
  <select name="estudiantes[1][sexo]">
    <option value="Hombre">Hombre</option>
    <option value="Mujer">Mujer</option>
  </select><br>
  <label>Nota Definitiva:</label>
  <input type="number" name="estudiantes[1][nota]"><br><br>

  <label>Nombre:</label>
  <input type="text" name="estudiantes[2][nombre]"><br>
  <label>Sexo:</label>
  <select name="estudiantes[2][sexo]">
    <option value="Hombre">Hombre</option>
    <option value="Mujer">Mujer</option>
  </select><br>
  <label>Nota Definitiva:</label>
  <input type="number" name="estudiantes[2][nota]"><br><br>
  <input type="submit" value="Procesar notas">
</form>

</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $estudiantes = $_POST["estudiantes"];
    $estudiante_mayor_nota = "";
    $estudiante_menor_nota = "";
    $num_hombres = 0;
    $num_mujeres = 0;
    $nota_maxima = 0;
    $nota_minima = 100;
    foreach ($estudiantes as $estudiante) {
        $nombre = $estudiante["nombre"];
        $sexo = $estudiante["sexo"];
        $nota = $estudiante["nota"];
        $num_hombres += ($sexo == 'Hombre') ? 1 : 0;
        $num_mujeres += ($sexo == 'Mujer') ? 1 : 0;
        $nota_maxima = ($nota > $nota_maxima) ? $nota : $nota_maxima;
        $estudiante_mayor_nota = ($nota == $nota_maxima) ? $nombre : $estudiante_mayor_nota;
        $nota_minima = ($nota < $nota_minima) ? $nota : $nota_minima;
        $estudiante_menor_nota = ($nota == $nota_minima) ? $nombre : $estudiante_menor_nota;
    }
    echo "El estudiante con la mayor nota es: {$estudiante_mayor_nota}<br>";
    echo "El estudiante con la menor nota es: {$estudiante_menor_nota}<br>";
    echo "El número de hombres es: {$num_hombres}<br>";
    echo "El número de mujeres es: {$num_mujeres}<br>";
}
?>

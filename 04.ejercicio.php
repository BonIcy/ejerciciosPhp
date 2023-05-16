<!-- 4. Construir el algoritmo que solicite el nombre y edad de 3
personas y determine el nombre de la persona con mayor edad. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nombre y edad</title>
</head>
<body>
    <form action="04.ejercicio.php" method="post">
        <label>Persona 1:</label>
        <input type="text" placeholder="Ingresa el nombre"name="nombre1">
        <input type="number" placeholder="Ingresa la edad"name="edad1"><br><br>
        <label>Persona 2:</label>
        <input type="text" placeholder="Ingresa el nombre"name="nombre2">
        <input type="number" placeholder="Ingresa la edad"name="edad2"><br><br>
        <label>Persona 3:</label>
        <input type="text" placeholder="Ingresa el nombre"name="nombre3">
        <input type="number" placeholder="Ingresa la edad"name="edad3"><br><br>
        <input type= "submit" value="Listo">
    </form>
</body>
</html>
<?php

$nombre1 = $_POST['nombre'];
$edad1 = $_POST['edad'];
$nombre2 = $_POST['nombre2'];
$edad2 = $_POST['edad2'];
$nombre3 = $_POST['nombre3'];
$edad3 = $_POST['edad3'];

$edades = [$edad1, $edad2, $edad3];
$edadMayor = max($edades);

if ($edadMayor == $edad1) {
    $nombreMayor = $nombre1;
} elseif ($edadMayor == $edad2) {
    $nombreMayor = $nombre2;
} else {
    $nombreMayor = $nombre3;
}

echo "La persona con la edad mayor es: {$nombreMayor} con {$edadMayor} años";
?>

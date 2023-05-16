<!-- 1. Construir el algoritmo para un programa que ingrese tres
notas de un alumno, si el promedio es menor o igual a 3.9
mostrar un mensaje "Estudie“, de lo contrario un mensaje que
diga "becado" -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<fieldset>
    <form action="01.ejercicio.php" method="get">
        <legend>Nota 1</legend>
        <label>Ingresa la nota 1 del estudiante</label>
        <input type="text" name="nota1">

        <legend>Nota 2</legend>
        <label>Ingresa la nota 2 del estudiante</label>
        <input type="text" name="nota2">

        <legend>Nota 3</legend>
        <label>Ingresa la nota 3 del estudiante</label>
        <input type="text" name="nota3">
        <input type="submit" value="Hecho">
    </form>
</fieldset>
</body>
</html>
<?php
if ($_GET){
    $nota1 = $_GET['nota1'];
    $nota2 = $_GET['nota2'];
    $nota3 = $_GET['nota3'];
    $promedio = (floatval($nota1) + floatval($nota2) + floatval($nota3)) / 3;
    echo "El promedio es de {$promedio} <br><br>";
    if($promedio > 3.8){
        echo "Buen promedio crack ;)";
    }
    else {
        echo "Estudia >:c";
    }
}
?>
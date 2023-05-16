<!-- 3. Construir el algoritmo para determinar el voltaje de un
circuito a partir de la resistencia y la intensidad de corriente. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de Voltaje</title>
</head>
<body>
    <form action="03.ejercicio.php" method="get">
        <label>Inserte el valor que tiene la resistencia (en Ohmios Ω)</label>
        <input type="text" name="resis"><br>
        <label>Digita la intensidad de la corriente (en voltios)</label>
        <input type="text" name="inte"><br>
        <input type= "submit" value="Hecho">
    </form>
</body>
</html>
<?php 
    $resistencia = floatval($_GET["resis"]);
    $intensidad = floatval($_GET["inte"]);
    if ($_GET){
        $total = $resistencia * $intensidad;
        echo "El voltaje del circuito es de: {$total} voltios";
    }
?>
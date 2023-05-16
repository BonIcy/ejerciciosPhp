<!-- 2 Dado un número indicar si es par o impar y si es mayor de 10. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Par, impar, mayor/menor a 10</title>
</head>
<body>
    <form action="02.ejercicio.php" method="get">
        <label>Digita un numero entero :3</label>
        <input type="number" name="number" value="0" min="0">
        <input type="submit" value="Listo :D">
    </form>
</body>
</html>
<?php
$number = $_GET['number'];
if ($number % 2 === 0 ){
    echo"El numero {$number} es par<br>";
}
else{
    echo"El numero {$number} es impar<br>";
}
if ($number > 10){
    echo"El numero {$number} es mayor de 10<br>";
}
elseif ($number === 10){
    echo"El numero {$number} es  10<br>";
}
else{
    echo"El numero {$number} es menor a 10";
}
?>
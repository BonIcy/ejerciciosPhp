<!-- Construir el algoritmo que lea por teclado dos números,
si el primero es mayor al segundo informar su suma y
diferencia, en caso contrario, informar el producto y la
división del primero respecto al segundo.
 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="05.ejercicio.php" method="post">
        <label>Numero 1</label><br>
        <input type="number" name="numero1"><br><br>
        <label>Numero 2 </label><br>
        <input type="number" name="numero2"><br><br>
        <input type= "submit" value="Enviar">
    </form>
</body>
</html>
 <?php
$numero1 = $_POST['numero1'];
$numero2 = $_POST['numero2'];

if ($numero1 > $numero2) {
    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;

    echo "El primer número es mayor que el segundo.<br>";
    echo "La suma de los números es: {$suma} <br>";
    echo "La diferencia de los números es: {$resta}";
}

elseif($numero1 == $numero2){
    $producto = $numero1 ** 2;
    $suma = $numero1 * 2;
    echo"Los numeros son iguales.<br>";
    echo "La suma de los números es: {$suma} <br>";
    echo "El producto de los números es: {$producto} <br>";
} 

else {
    $producto = $numero1 * $numero2;
    $division = $numero1 / $numero2;
    echo "El segundo número es mayor que el primero.<br>";
    echo "El producto de los números es: {$producto}. <br>";
    echo "La división del primer número entre el segundo es: {$division}";
}
?>

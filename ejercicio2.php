<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Ejercicio 2</title>
</head>

<body>
    <form method="GET">
    <label>Ingrese valor a</label>
    <input type="number" name="numero1">
    <label>Ingrese valor b</label>
    <input type="number" name="numero2">
    <input type="submit" value="Enviar">
    </form>
</body>

</html>
<?php
include("funciones.php");
$x = $_GET['numero1'] ?? "";
$y = $_GET['numero2'] ?? "";


echo "Suma ".sumar($x, $y)."<br>";
echo "Resta ".restar($x, $y)."<br>";
echo "multiplicacion ".multiplicar($x, $y)."<br>";
echo "division ".dividir($x, $y);

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>ejercicio4</title>
</head>

<body>
    <form method="GET">
        <label>Ingrese letra</label>
        <input type="text" name="letra">
        <input type="submit" value="Enviar">
    </form>
</body>

</html>
<?php
$letra = $_GET['letra'] ?? "";
$letra = strtolower($letra);
$palabras = array(
    "Cristian", "HelIcoptero", "baUl", "arquitecto", "torta", "pescado", "pasteldePapa", "guiso", "arroz",
    "fideos", "Tarjeta", "serpiente", "Pessio", "control", "Dinosaurio", "Diario", "agua", "celular", "monitor", "fuente",
);

$tamanioarray = count($palabras);
$totalletras=0;
for ($i = 0; $i < $tamanioarray; $i++) {
    $minusculas = strtolower($palabras[$i]);
    $contadorletras = substr_count($palabras[$i], $letra);
    echo $palabras[$i]." tiene ".$contadorletras." $letra "."<br>";
    $totalletras = $totalletras + $contadorletras;
    
}
echo "Hay en total: ".$totalletras." letras ".$letra."<br>";
$promedio = $contadorletras / $totalletras;
echo "El promedio de palabras es :".$promedio;
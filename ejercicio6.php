<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>ejercicio 6</title>
</head>

<body>
    <form method="GET">
        <label>Ingrese fecha</label>
        <input type="text" name="fecha" placeholder="yyyy-mm-dd">
        <label>Ingrese un numero</label>
        <input type="number" name="numero">
        <input type="submit" value="Enviar">
    </form>
</body>

</html>
<?php
date_default_timezone_set('America/Argentina/San_Luis');
$fecha = $_GET['fecha'] ?? "";
$numero = $_GET['numero'] ?? "";
$diaUnix = 60 * 60 * 24;
$dias = $numero * $diaUnix;
$total = strtotime($fecha) + $dias;
echo "$fecha + "."(".$numero.")"." dias es = ".date("Y-m-d", $total);



?>
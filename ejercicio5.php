<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>ejercicio 5</title>
</head>

<body>
    <form method="GET">
        <label>Ingrese fecha</label>
        <input type="text" name="fecha">
        <input type="submit" value="Enviar">
    </form>
</body>

</html>
<?php
$fecha = $_GET['fecha'] ?? "";;
$hoy = date("Y-m-d");
$segundosxdia = 60 * 60 * 24;
$diferencia = strtotime($fecha) - strtotime($hoy);
$dias = intval($diferencia / $segundosxdia);
echo "Faltan $dias dias para la fecha <br>";

?>
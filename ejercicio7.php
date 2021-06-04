<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>ejercicio 7</title>
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
$meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
$diassemana = array("Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sábado");
$fecha = $_GET['fecha'] ?? "";
$numero = $_GET['numero'] ?? "";
$diaUnix = 60 * 60 * 24;
$dias = $numero * $diaUnix;
$total = strtotime($fecha) + $dias;
echo "$fecha + " . $numero . " dias es = ";
echo $diassemana[date('w',$total)]." ".date('d',$total)." de ".$meses[date('n',$total)-1]. " del ".date('Y',$total) ;





?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>ejercicio 8</title>
</head>

<body>
    <form method="GET" action="">
        <label for="">Ingrese numero</label>
        <input type="number" name="numero">
        <input type="submit" value="Enviar">
    </form>
</body>

</html>
<?php
$numero = $_GET['numero'] ?? "";
$unidad = $numero % 10;$numero = $numero / 10;
$decena = $numero % 10;$numero = $numero / 10;
$centena = $numero % 10;$numero = $numero / 10;
$millar = $numero % 10;$numero = $numero / 10;

switch ($millar) {
    case 1:
        echo "M";
        break;
    case 2:
        echo "MM";
        break;
    case 3:
        echo "MMM";
        break;
}
switch ($centena) {
    case 1:
        echo "C";
        break;
    case 2:
        echo "CC";
        break;
    case 3:
        echo "CCC";
        break;
    case 4:
        echo "CD";
        break;
    case 5:
        echo "D";
        break;
    case 6:
        echo "DC";
        break;
    case 7:
        echo "DCC";
        break;
    case 8:
        echo "DCCC";
        break;
    case 9:
        echo "CM";
        break;
}
switch ($decena) {
    case 1:
        echo "X";
        break;
    case 2:
        echo "XX";
        break;
    case 3:
        echo "XXX";
        break;
    case 4:
        echo "XL";
        break;
    case 5:
        echo "L";
        break;
    case 6:
        echo "LX";
        break;
    case 7:
        echo "LXX";
        break;
    case 8:
        echo "LXXX";
        break;
    case 9:
        echo "XC";
        break;
}

switch ($unidad) {
    case 1:
        echo "I";
        break;
    case 2:
        echo "II";
        break;
    case 3:
        echo "III";
        break;
    case 4:
        echo "IV";
        break;
    case 5:
        echo "V";
        break;
    case 6:
        echo "VI";
        break;
    case 7:
        echo "VII";
        break;
    case 8:
        echo "VIII";
        break;
    case 9:
        echo "IX";
        break;
}



?>
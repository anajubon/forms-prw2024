<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $p = $_POST['p'];
    $m = $_POST['m'];
    $g = $_POST['g'];

    $valor_p = $p * 10;
    $valor_m = $m * 12;
    $valor_g = $g * 15;

    $total = $valor_p + $valor_m + $valor_g;

    echo "<h2>Valor Arrecadado: R$ $total</h2>";
 
?>
</body>
</html>
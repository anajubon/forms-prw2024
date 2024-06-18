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
    // Recebe os valores do formulário
    $comprimento = $_POST['co'];
    $largura = $_POST['la'];

    // Calcula a área do terreno
    $a = $comprimento * $largura;

    // Exibe a área do terreno
    echo "<p>A área do terreno é: " . $a . " metros quadrados.</p>";
    ?>
</body>
</html>
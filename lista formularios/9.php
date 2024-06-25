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
  if (isset($_POST['nome']) && isset($_POST['horario'])) {
    $nome = $_POST['nome'];
    $horario = $_POST['horario'];
    list($hora, $minuto) = explode(':', $horario);

    if ($hora < 12) {
      $saudacao = "Bom dia, $nome!";
    } elseif ($hora < 18) {
      $saudacao = "Boa tarde, $nome!";
    } else {
      $saudacao = "Boa noite, $nome!";
    }

    echo "<h2>$saudacao</h2>";
  } else {
    echo "Preencha os campos corretamente!";
  }
?>
</body>
</html>
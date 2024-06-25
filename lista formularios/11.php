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
    $prontuario = $_POST['prontuario'];
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $periodo = $_POST['periodo'];
    $modulo = $_POST['modulo'];

    $erros = array();

    if (empty($prontuario)) {
      $erros[] = "Prontuário não pode estar em branco";
    }

    if (empty($nome)) {
      $erros[] = "Nome não pode estar em branco";
    }

    if ($idade < 15 || $idade > 75) {
      $erros[] = "Idade deve ser um valor entre 15 e 75 anos";
    }

    if ($periodo != "V-Vespertino" && $periodo != "N-Noturno") {
      $erros[] = "Período deve ser V-Vespertino ou N-Noturno";
    }

    if ($modulo < 1 || $modulo > 4) {
      $erros[] = "Módulo deve ser um valor entre 1 e 4";
    }

    if (count($erros) > 0) {
      echo "<h2>Erros:</h2><ul>";
      foreach ($erros as $erro) {
        echo "<li>$erro</li>";
      }
      echo "</ul>";
    } else {
      echo "<h2>Dados válidos!</h2>";
    }
?>
</body>
</html>
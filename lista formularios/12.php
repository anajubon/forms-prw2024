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
    $pasta = $_POST['pasta'];
    $num_imagens = $_POST['num_imagens'];

    // Verificar se a pasta existe
    if (!is_dir("htdocs/$pasta")) {
      echo "Pasta não encontrada!";
      exit;
    }

    // Imprimir imagens
    echo "<table>";
    for ($i = 1; $i <= $num_imagens; $i++) {
      $imagem = "$pasta/$i.jpg";
      if (file_exists("htdocs/$imagem")) {
        echo "<tr><td><img src='htdocs/$imagem' width='150' height='100'></td></tr>";
      } else {
        echo "<tr><td>Imagem $i não encontrada!</td></tr>";
      }
    }
    echo "</table>";
?>
</body>
</html>
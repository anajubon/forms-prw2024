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
$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
$op = $_POST['op'];

switch ($op) {
    case 'som':
      $result = $n1 + $n2;
      break;
    case 'sub':
      $result = $n1 - $n2;
      break;
    case 'mul':
      $result = $n1 * $n2;
      break;
    case 'div':
      $result = $n1 / $n2;
      break;
}

  echo "Resultado: $result";
?>
</body>
</html>
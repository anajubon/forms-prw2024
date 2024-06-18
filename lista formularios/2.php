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
$text = $_POST['text'];
$textarea = $_POST['textarea'];
$checkbox = $_POST['checkbox'];
$radio = $_POST['radio'];
$select = $_POST['select'];

  echo "$text<br>";
  echo "$textarea<br>";
  if ($checkbox == "checked") {
    echo "Selecionado";
  } else {
    echo "Não selecionado";
  }
  echo "<br>";
  echo "$radio<br>";
  echo "$select<br>";
?>
</body>
</html>
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
$n = $_POST['n'];

for($i=0;$i<=10;$i++){
    $result = $n * $i;
    echo "$n x ",$i," = $result<br>";
}
?>
</body>
</html>
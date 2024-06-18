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
$estado = $_POST['estado'];

$capital = array(
  "ac" => "Rio Branco",
  "al" => "Maceió",
  "am" => "Manaus",
  "ap" => "Macapá",
  "ba" => "Salvador",
  "ce" => "Fortaleza",
  "df" => "Brasília",
  "es" => "Vitória",
  "go" => "Goiânia",
  "ma" => "São Luís",
  "mt" => "Cuiabá",
  "ms" => "Campo Grande",
  "mg" => "Belo Horizonte",
  "pa" => "Belém",
  "pb" => "João Pessoa",
  "pr" => "Curitiba",
  "pe" => "Recife",
  "pi" => "Teresina",
  "rj" => "Rio de Janeiro",
  "rn" => "Natal",
  "ro" => "Porto Velho",
  "rs" => "Porto Alegre",
  "rr" => "Boa Vista",
  "sc" => "Florianópolis",
  "sp" => "São Paulo",
  "se" => "Aracaju",
  "to" => "Palmas"
);

if (array_key_exists($estado, $capital)) //exibe capital do estado
{
  echo "A capital de $estado é " . $capital[$estado];
} 
else{
  echo "Estado inválido.";
}
?>
</body>
</html>

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
echo "<h2>cadastro</h2>";
$user = $_POST['user'];
$senha = $_POST['senha'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];

$erro=0;
if (strlen($user)<5){ 
echo "O username deve possuir no mínimo 5 caracteres.<br>"; $erro=1;//ve o tamanho da informação que entrou e fala que menos que 5 não pode
}
if (strlen($senha)<5){ 
    echo "A senha deve possuir no mínimo 5 caracteres.<br>"; $erro=1;
}
if(empty($cidade)){ 
    echo "Favor digitar sua cidade<br>"; $erro=1;//avalia se o campo esta vazio e diz para digitar a cidade
}
if(strlen($estado)!=2){ 
    echo "Favor digitar seu estado corretamente<br>"; $erro=1;//ve que o tamanho não é igual a 2(silha do estado)
}
//VERIFICA SE NÃO HOUVE ERRO
if($erro==0){
    echo "Todos os dados foram digitados corretamente!";
}


?>
</body>
</html>
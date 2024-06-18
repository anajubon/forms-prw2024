<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .reprovado {
            color: red;
        }
    </style>
</head>
<body>
    <?php
        // Recebe os valores do formulário
        $nome = $_POST['nome'];
        $n1 = floatval($_POST['n1']);
        $n2 = floatval($_POST['n2']);
        $freq = intval($_POST['freq']);

        // Calcula a média aritmética das notas
        $media = ($n1 + $n2) / 2;

        // Exibe os dados do aluno
        echo "<p>Aluno: $nome</p>";
        echo "<p>Nota 1: $n1</p>";
        echo "<p>Nota 2: $n2</p>";
        echo "<p>Frequência: $freq%</p>";

        // Verifica condições de aprovação
        if ($media < 5) {
            echo "<p class = 'reprovado'>Reprova por nota</p>";
        } 
        elseif ($freq < 75) {
            echo "<p class = 'reprovado'>Reprova por frequência</p>";
        } 
        else {
            echo "<p>Aprovado</p>";
        }

    ?>
</body>
</html>
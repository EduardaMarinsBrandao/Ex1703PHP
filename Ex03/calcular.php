<!DOCTYPE HTML>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Valor Maior</title>
</head>
<body>
<?php
    //Declara as variáveis e captura os dados do formulário
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $s = 0;

    //Condição IF que determina qual valor é maior 
    if ($n1 <= 800.00) 
    {
        $s = $n1 * (1 + 0.30);
    }
    if ($n2 > 1)
    {
        $s = $n1 + ($n2 * 90.00);
    }

    echo "O seu novo salário é: R$ $s";
    
?>
</body>
</html>
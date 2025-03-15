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

    //Condição IF que determina qual valor é maior
    if ($n1 > $n2) 
    {
        echo "O número maior é: $n1";
    }
    else
    {
        echo "O número maior é: $n2";
    }
    
?>
</body>
</html>

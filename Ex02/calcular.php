<!DOCTYPE HTML>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Média das notas</title>
</head>
<body>
<?php
    //Declara as variáveis e captura os dados do formulário
    $n1 = $_POST['n1'];
	$n2 = $_POST['n2'];
	$n3 = $_POST['n3'];
	$n4 = $_POST['n4'];
	
    // Calculando a média
    $soma = ($n1 + $n2 + $n3 + $n4) / 4;

    if($soma > 5)
    {
        echo "Aprovado";
    }
    else
    echo "Reprovado";

?>
</body>
</html>
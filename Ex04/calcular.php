<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cálculo IMC</title>
</head>
<body>
<?php
    //Declara as variáveis e captura os dados do formulário
    $n1 = $_POST['peso'];
	$n2 = $_POST['altura'];
	
    // Calculando o IMC da pessoa
    $imc = $n1 / ($n2 * $n2);
    echo "Seu IMC é: $imc <br />";

    if ( $imc < 18.5 )
    {
        echo "Você está abaixo do peso.";
    }
    else if ( $imc >= 18.5 && $imc < 24.9 )
    {
        echo "Você está com o peso normal.";
    }
    else if ( $imc >= 25 && $imc < 29.9 )
    {
        echo "Você está com sobrepeso.";
    }
    else if ( $imc >= 30 && $imc < 34.9 )
    {
        echo "Você está com obesidade grau 1.";
    }
    else if ( $imc >= 35 && $imc < 39.9 )
    {
        echo "Você está com obesidade grau 2.";
    }
    else if ( $imc >= 40 )
    {
        echo "Você está com obesidade grau 3.";
    }
?>
</body>
</html>
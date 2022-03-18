<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Aula 10 - While - Exemplo 03</title>
    <link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>
    
    <h1>Aula 10 - While - Exemplo 03</h1>

    <?php include_once 'menu.php'; ?>

    <h4>
        Percorrer um intervalo finito de valores, iniciando em -12 e indo 
        até 'x', sendo este valor positivo. <br>
        Não sabemos inicialmente qual o valor de 'x', apenas que pararemos 
        de contar (percorrer o intervalo) quando encontrarmos 49 números 
        ímpares dentro deste intervalo. <br>
        Ao final, mostrar qual o último valor da sequência.
    </h4>

    <?php
    
    $x = -12; // valor inicial de $X
    $impares = 0; // quantidade ininial de valores ímpares encontrados

    //enquanto a quantidade de ímpares for menos que 49
    while ($impares < 49)
    {
        //verificar se o valor atual de $x é ímpar
        if ($x % 2 != 0)
        {
            $impares++; // imcrementamos a contagem de ímpares
        }

        $x++; // incrementamos o valor de '$x'

    }

    echo "O último valor da sequência é: $x";

    ?>

</body>
</html>
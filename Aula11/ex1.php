<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Aula 11 - Do/While - Ex 01</title>
    <link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>
    
    <h1>Aula 11 - Do/While - Exemplo 01</h1>

    <?php include_once '../menu.php'; ?>

    <p>
        Mostrar o valor de 'x' enquanto este for menos que 10. Faça a 
        variável 'x' incrementar uma unidade a cada passagem do laço de 
        repetição. Porém, a variável 'x' deve iniciar com valor 10.
    </p>

    <h3>Resultado:</h3>

    <?php

        $x = 10;

        do
        {
            echo "Valor atual de x: $x<br>";
            $x++;

        }   while ($x < 10);

    ?>

</body>
</html>
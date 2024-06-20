<?php

    echo "3 + 2 * 5 = ";
    echo 3 + 2 * 5;
    echo "<br>";

    echo "(3 + 2) * 5 = ";
    echo (3 + 2) * 5;
    echo "<br>";

    echo "5 + 2 / 10 = ";
    echo 5 + 2 / 10; // Com isso teremos um resultado Float, de maneira natural, sem precisarmos usar nenhuma funcao ou inserir algum tipo de dado informado que é um Float, isso ocorre de maneira automatica.
    echo "<br>";

    // Agora iremos fazer a mesma operacao, porem com Variaveis ao inves de valores fixo como as acima:

    $a = 5;
    $b = 2;
    $c = 10;

    echo "$a + $b / $c = "; // Usando variaveis para dar o valor do float
    echo $a + $b / $c; // Com isso podemos observar que estar dentro de uma variavel, nao afeta nada a operacao.
    echo "<br>";

    echo "$c + $b / $a = ";
    echo $c + $b / $a;
    echo "<br>";

    // Outra coisa que pode ser feito é, ao inves de adicionarmos esses valores diretamente em uma expressao e imprimir, podemos estar encapsulando isso em uma variavel:

    $d = $a * $b * $c;

    echo "$a * $b * $c = ";
    echo $d;
    echo "<br>" // Com isso podemos observar que as variaveis podem ser originadas por meio de uma expressao, com isso ele primeiro pega os valores de a, b e c e atribui a variavel $d.



?>
<?php

    /*
    Soma dos Dígitos

1. Crie uma função chamada sumDigits que recebe um número inteiro como parâmetro.

2. A função deve calcular a soma dos dígitos desse número.

3. Retorne o valor da soma.

    */

    function sumDigits($n) {
        $soma = 0;
        $n = abs($n);
        $n = strval($n);

        for($ind = 0; $ind < strlen($n); $ind++) {
            $soma += (int)$n[$ind];
        }
        return $soma;
    }

    print_r(sumDigits(25));

?>
<?php

    /*
    Crie uma função chamada sumEvenNumbers que recebe um número inteiro positivo como parâmetro.

A função deve retornar a soma de todos os números pares de 1 até o número fornecido, inclusive.

Utilize uma estrutura de repetição para percorrer os números e uma variável para acumular a soma.
    */

    function sumEvenNumbers($nFunc) {
        $resultF = 0;
        $val = range(1, $nFunc);

        for($i = 0; $i < count($val); $i++) {
            if($val[$i] % 2 == 0) {
                $resultF += $val[$i];
            }
        }
        return $resultF;
    }

    $n = 25;

    $fim = sumEvenNumbers($n);

    print_r($fim);

?>
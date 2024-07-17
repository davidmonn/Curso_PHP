<?php

    /*
        Crie uma função chamada sumEvenNumbers que recebe um número inteiro positivo como parâmetro.

A função deve retornar a soma de todos os números pares de 1 até o número fornecido, inclusive.

Utilize uma estrutura de repetição para percorrer os números e uma variável para acumular a soma.
    */

    function sumEvenNumbers($nFunc) {
        $resultadoF = 0;

        for($i = 0; $i <= $nFunc; $i++) {
            if($i % 2 == 0) {// remover o $nFunc pois nao e um array
                $resultadoF += $i;
            } 
        }
        return $resultadoF;
    }

    $n = 10;

    $fim = sumEvenNumbers($n);

    print_r($fim);

?>
<?php

    /*
    Exercício: Contar Números Ímpares

Crie uma função em PHP chamada contarImpares que receba um array de números como parâmetro e retorne a quantidade de números ímpares presentes no array.

    Instruções
Crie a função contarImpares.
Utilize um loop foreach para iterar pelos elementos do array.
Use uma estrutura condicional para verificar se o número é ímpar.
Conte quantos números ímpares existem no array.
Retorne a quantidade de números ímpares.
    */

    function contarImpares($arr) {
        $recb = 0;

        foreach($arr as $indF) {
            if($indF % 2 != 0) {
                $recb++;
            }
        }
        return $recb;
    }

    $numbers = [];

    for($ind = 0; $ind <= 25; $ind++) {
        array_push($numbers, $ind);
    }

    $end = contarImpares($numbers);

    print_r($end);

?>
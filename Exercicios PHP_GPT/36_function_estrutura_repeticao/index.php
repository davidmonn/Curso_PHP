<?php

    /*
    Exercício 4: Soma de Números Ímpares em um Array
    Crie uma função que receba um array de números e retorne a soma de todos os números ímpares contidos no array.
    */

    function somaImpares($valor) {
        $somaValor = 0;

        foreach($valor as $ind) {
            if($ind % 2 != 0) {
                $somaValor += $ind;
            }
        }
        return $somaValor;
    }

    $numbers = [2,3,5,7,8,10,12,15,16];

    $result = somaImpares($numbers);

    print_r($result);

?>
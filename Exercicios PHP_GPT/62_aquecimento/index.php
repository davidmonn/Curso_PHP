<?php

    /*
    Exercício: Soma dos Elementos de um Array

Crie uma função em PHP chamada somarArray que receba um array de números como parâmetro e retorne a soma de todos os elementos desse array.
    */

    function somaArray($somaF) {
        $resultFunc = 0;

        foreach($somaF as $arrFunc) {
            $resultFunc += $arrFunc;
        }
        return $resultFunc;
    }

    $numeros = range(1,15);

    $soma = somaArray($numeros);

    print_r($soma);

?>
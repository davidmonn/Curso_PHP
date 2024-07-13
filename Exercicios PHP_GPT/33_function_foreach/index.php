<?php

    /*
    Exercício 1: Multiplicar Elementos de um Array por um Número
Crie uma função que receba um array de números e um número como parâmetros. A função deve retornar um novo array onde cada elemento é o resultado da multiplicação dos elementos do array original pelo número fornecido
    */

    function valorArr($array, $numero){
        $arrayNumber = [];

        foreach($array as $value) {
            $arrayNumber[] = $value * $numero;
        }
        return $arrayNumber;
    }

    $array = [2,4,6];
    $numero = 2;

    $final = valorArr($array, $numero);

    print_r($final);

?>
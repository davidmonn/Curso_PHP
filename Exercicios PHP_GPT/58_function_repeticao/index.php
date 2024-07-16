<?php

    /*
    Exercício: Contar strings com uma quantidade específica de caracteres
Escreva uma função em PHP que receba um array de strings e um número como argumentos. A função deve retornar a quantidade de strings no array que possuem exatamente o número de caracteres especificado.
    */

    function contStr($valorArr, $nFunc) {
        $contFunc = 0;

        foreach($valorArr as $indFunc) {
            if(strlen($indFunc) == $nFunc) {
                $contFunc++;
            }
        }
        return $contFunc;
    }

    $aleatorio = ['teste' , 'macarrao', 'hamburguer', 'lasanha', 'frango', 'pizza', 'torta'];
    $max = 5;

    $resultado = contStr($aleatorio, $max);

    print_r($resultado);

?>
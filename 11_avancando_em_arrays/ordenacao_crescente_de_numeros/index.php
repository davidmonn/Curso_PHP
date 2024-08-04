<?php

    /*
    Ordenação Crescente de Números
    Implemente uma função chamada ordenarNumeros que recebe um array de números como parâmetro.
    A função deve ordenar os números em ordem crescente.
    Retorne o array de números ordenado.
    */

    function ordenarNumeros($arrN) {
        sort($arrN);
        return $arrN;
    }

    $n = [5,1,47,4,6,8,9,15,23,20];
    $resul = ordenarNumeros($n);

    print_r($resul);
    

?>
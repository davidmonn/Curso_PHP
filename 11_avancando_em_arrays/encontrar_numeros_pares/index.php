<?php

    /*
    Escreva uma função chamada encontrarPares que recebe um array de números inteiros como parâmetro.
    A função deve retornar um novo array contendo apenas os números pares presentes no array original.
    Considere que o array sempre terá pelo menos um elemento.
    */

    function encontrarPares($pares) {
        $par = [];

        foreach($pares as $valor) {
            if($valor % 2 == 0) {
                $par[] = $valor;
            }
        }
        return $par;
    }

    $n = [1,3,5,4,8,9,10,15,17,18,20];
    $result = encontrarPares($n);

    print_r($result);

?>
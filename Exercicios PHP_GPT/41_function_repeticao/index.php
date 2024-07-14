<?php

    /*
    Exercício: Filtrar Strings Longas
Crie uma função chamada filtrarStringsLongas que recebe um array de strings e um número inteiro n como parâmetros.
A função deve retornar um novo array contendo apenas as strings que têm comprimento maior que n.
    */

    function filtrasStringsLongas($str, $n) {
        $recb = [];

        foreach($str as $valorStr) {
            if(strlen($valorStr) > $n) {
                $recb[] = $valorStr;
            }
        }
        return $recb;
    }

    $testeStr = ['banana', 'maca', 'maracuja', 'pera', 'morango', 'pesego'];

    $result = filtrasStringsLongas($testeStr, 4);

    print_r($result);
?>
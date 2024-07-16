<?php

    /*
    Exercício 1: Encontrar o menor número em um array
Escreva uma função em PHP que receba um array de números como argumento e retorne o menor número presente no array.
    */

    function menorVal($menorFunc) {
        $valFunc = $menorFunc[0];

        foreach($menorFunc as $indFunc){
            if($indFunc < $valFunc) {
                $valFunc = $indFunc;
            }
        }
        return $valFunc;
    }

    $valores = [55,21,33, 1,44,55,71];

    $result = menorVal($valores);

    print_r($result);

?>
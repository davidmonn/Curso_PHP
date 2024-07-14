<?php

    /*
    Exercício 5: Filtragem de Números Pares

    Crie uma função que receba um array de números e retorne um novo array contendo apenas os números pares.
    */

    function separacaoPares($comparacao) {
        $recebComp = [];

        foreach($comparacao as $value) {
            if($value % 2 == 0) {
                $recebComp[] = $value;
            }
        }
        return $recebComp;
    }

    $nums = [1,2,3,4,5,6,7,8,9,10,11,12,16,17,18,19,20];

    $result = separacaoPares($nums);

    print_r($result);

?>
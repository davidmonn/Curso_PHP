<?php

    /*
    Exercício 6: Calcular Média dos Valores de um Array

    Crie uma função que receba um array de números e retorne a média dos valores.
    */

    function mediaArray($valores) {
        $recebMedia = 0;
        
        for($ind = 0; $ind < count($valores); $ind++) {
            $recebMedia += $valores[$ind];
        }
        return $recebMedia / $ind;
    }

    $array = [1,2,3,4,5,6,7,8,9,10,11,12,13,14];

    $total = mediaArray($array);

    print_r($total);

?>

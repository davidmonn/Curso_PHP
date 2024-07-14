<?php

    /*
    Exercício: Filtrar Números Negativos
Crie uma função chamada filtrarNegativos que recebe um array de números.
A função deve criar um novo array contendo apenas os números que são negativos.
Retorne esse novo array e imprima na tela.
    */

    function valNeg($valores) {
        $recbVal = [];

        for($iFunc = 0; $iFunc < count($valores); $iFunc++) {
            if($valores[$iFunc] < 0) {
                array_push($recbVal, $valores[$iFunc]);
            }
        }
        return $recbVal;
    }

    $numbers = [];

    for($i = -20; $i < 20; $i++) {
        array_push($numbers, $i);
    }

    $result = valNeg($numbers);

    print_r($result);

?>
<?php

    /*
    Exercício: Filtrar Números Divisíveis por 3
Crie uma função chamada filtrarDivisiveisPor3 que recebe um array de números.
A função deve criar um novo array contendo apenas os números que são divisíveis por 3.
Retorne esse novo array e imprima na tela.
    */

    function filtDiv($arrFunc) {
        $recbArr = [];

        for($iFunc = 0; $iFunc < count($arrFunc); $iFunc++){
            
            if($arrFunc[$iFunc] % 3 == 0) {
                array_push($recbArr, $arrFunc[$iFunc]);
            }
        }
        return $recbArr;
    }

    $numbers = [];

    for($iArr = 0; $iArr < 30; $iArr++) {
        array_push($numbers, $iArr);
    }

    $resultado = filtDiv($numbers);

    print_r($resultado);

?>
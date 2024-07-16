<?php

    /*
    Exercício 36

Crie uma função que receba um array de números;
Crie apenas um novo array com apenas os números que são maiores que 7;
Retorne este novo array é imprima na tela;

    */

    function maioresS($valFunc, $nFunc) {
        $recbFunc = [];

        for($indF = 0; $indF < count($valFunc); $indF++) {
            if($valFunc[$indF] > $nFunc) {
               array_push($recbFunc, $valFunc[$indF]);
            }        
        }
        return $recbFunc;
    }

    $numeros = [];
    $escolherVal = 7;

    for($i = 0; $i < 20; $i++) {
        array_push($numeros, $i);
    }

    $end = maioresS($numeros, $escolherVal);

    print_r($end);

?>
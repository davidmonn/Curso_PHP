<?php

    /*
    Exercício 36

Crie uma função que receba um array de números;
Crie apenas um novo array com apenas os números que são maiores que 7;
Retorne este novo array é imprima na tela;

    */

    function maioresS($valArr, $nFunc) {
        $resultadoF = [];

        for($iFunc = 0; $iFunc < count($valArr); $iFunc++) {
            if($valArr[$iFunc] > $nFunc) {
                array_push($resultadoF, $valArr[$iFunc]);
            }
        }
        return $resultadoF;
    }

    $numbers = [];
    $escolha = 7;

    foreach(range(8,30) as $ind) {
        if($ind <= 30) {
            array_push($numbers, $ind);
        }
    }

    $resultado = maioresS($numbers, $escolha);

    print_r($resultado);

?>
<?php

    /*Exercício 36

Crie uma função que receba um array de números;
Crie apenas um novo array com apenas os números que são maiores que 7;
Retorne este novo array é imprima na tela;
    */

    function maiorSete($valor) {
        $maires = [];

        foreach($valor as $indValue) {
            if($indValue > 7) {
                $maiores[] = $indValue;
            }
        }
        return $maiores;
    }

    $numbers = [];
    
    for($ind = 0; $ind <= 30; $ind++) {
        array_push($numbers, $ind);
    }

    $result = maiorSete($numbers);

    print_r($result);

?>
<?php

    /*
    Exercício: Filtragem de Números Pares

Crie uma função em PHP chamada filtrarPares que receba um array de números como parâmetro e retorne um novo array contendo apenas os números pares.
    */

    function filtrarPares($arr) {
        $valFunc = [];

        foreach($arr as $indFunc){
            if($indFunc % 2 == 0) {
                $valFunc[] = $indFunc;
            }
        }
        return $valFunc;
    }

    $num = [];

    for($i = 0; $i <= 27; $i++) {
        array_push($num, $i);
    }

    $result = filtrarPares($num);

    print_r($result);

?>
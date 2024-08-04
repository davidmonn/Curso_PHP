<?php

    /*
    Escreva uma função chamada maiorElemento que recebe um array de números como parâmetro.
    A função deve retornar o maior elemento presente no array.
    Considere que o array sempre terá pelo menos um elemento.
    */

    function maiorElemento($arr) {
        $maior = $arr[0];

        foreach($arr as $valor) {
            if($valor > $maior) {
                $maior = $valor;
            }
        }
        return $maior;
    }

    $n = [1,5,78,4,6,8,9,10,55];
    $result = maiorElemento($n);

    print_r($result);

?>
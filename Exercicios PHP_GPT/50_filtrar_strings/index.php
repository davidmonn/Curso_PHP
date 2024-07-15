<?php

    /*
    Exercício: Filtrar Strings que Contêm uma Determinada Substring
Crie uma função chamada filtrarStringsPorSubstring que recebe um array de strings e uma substring.
A função deve criar um novo array contendo apenas as strings que contêm a substring fornecida.
Retorne esse novo array e imprima na tela.
    */

    function filtStr($strFunc, $subStr) {
        $valorStr = [];

        for($funcI = 0; $funcI < count($strFunc); $funcI++) {
            if (strpos($strFunc[$funcI], $subStr) !== false) {
                $valorStr[] = $strFunc[$funcI];
            }
        }
        return $valorStr;
    }

    $aleatorio = ['dado', 'video game', 'frutas', 'caneca', 'papel', 'caneta'];
    $param2 = 'ca';

    $result = filtStr($aleatorio, $param2);

    print_r($result);

?>
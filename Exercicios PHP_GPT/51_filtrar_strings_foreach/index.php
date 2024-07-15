<?php

    /*
Exercício: Filtrar Strings por Comprimento
Crie uma função chamada filtrarStringsPorComprimento que receba um array de strings e um comprimento mínimo.
A função deve criar um novo array contendo apenas as strings que têm um comprimento maior ou igual ao comprimento mínimo fornecido.
Retorne esse novo array e imprima na tela.
    */

    function strFilt($filtroFunc, $compFunc) {
        $filtragem = [];

        foreach($filtroFunc as $indFunc) {
            if(strlen($indFunc) >= $compFunc ) {
                $filtragem[] = $indFunc;
            }
        }
        return $filtragem;
    }

    $aleatorio = ['maracuja', 'melancia', 'morando', 'pera', 'figo', 'damasco', 'uva'];
    $valorMax = 5;

    $end = strFilt($aleatorio, $valorMax);

    print_r($end);

?>
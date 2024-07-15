<?php

    /*
Exercício: Filtrar Strings por Comprimento
Crie uma função chamada filtrarStringsPorComprimento que receba um array de strings e um comprimento mínimo.
A função deve criar um novo array contendo apenas as strings que têm um comprimento maior ou igual ao comprimento mínimo fornecido.
Retorne esse novo array e imprima na tela.
    */

    function filtragemStr($filtFunc, $comprFunc) {
        $comparaArmazena = [];

        for($indFuncao = 0; $indFuncao < count($filtFunc); $indFuncao++) {
            if(strlen($filtFunc[$indFuncao]) >= $comprFunc) {
                $comparaArmazena[] = $filtFunc[$indFuncao];
           }
        }
        return $comparaArmazena;
    }

    $aleatorio = ['maracuja', 'melancia', 'morando', 'pera', 'figo', 'damasco', 'uva'];
    $nMax = 6;

    $final = filtragemStr($aleatorio, $nMax);

    print_r($final);

?>
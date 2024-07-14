<?php

    /*
    
Ótimo! Vamos continuar com mais um exercício que envolve manipulação de strings e arrays.

Exercício: Converter Strings para Maiúsculas
Crie uma função chamada converterParaMaiusculas que recebe um array de strings como parâmetro.
A função deve retornar um novo array onde todas as strings foram convertidas para maiúsculas.
    */

    function convertM($maisc) {
        $recbValue = [];

        foreach($maisc as $val) {
            $recbValue[] = strtoupper($val);
        }
        return $recbValue;
    }

    $strings = ['banana', 'maracuja', 'pera', 'goiaba', 'laranja', 'uva'];

    $end = convertM($strings);

    print_r($end);

?>
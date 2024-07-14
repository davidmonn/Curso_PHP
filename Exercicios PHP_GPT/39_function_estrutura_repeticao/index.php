<?php

    /*
    Crie uma função que receba um array de strings e retorne uma única string que é a concatenação de todas as strings do array.
    */

    function concStrings($str) {
        $recStr = '';

        foreach($str as $valueStr) {
            $recStr .=  $valueStr . ' - ';
        }
        return implode(' - ', $str);
    }

    $string = ['Computador', 'Teste','Notebook', 'Lampada', 'Mouse'];

    $final = concStrings($string);

    print_r($final);


?>
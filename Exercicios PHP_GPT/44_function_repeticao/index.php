<?php

    /*
    Exercício: Contar Vogais em Strings
Crie uma função chamada contarVogais que recebe um array de strings como parâmetro.
A função deve contar quantas vogais (a, e, i, o, u) existem em cada string e retornar um novo array com esses totais.
    */

    function contVog($parmStr) {
        $recbVog = [];
        $vogais = ['a', 'e', 'i', 'o', 'u'];

        foreach($parmStr as $contVog) {
            $contagem = 0;

            for($i =0; $i < strlen($contVog); $i++) {
                if(in_array($contVog[$i], $vogais)){
                    $contagem++;
                }
            }
            $recebVog[] = $contagem;
        }
        return $recebVog;
    }

    $str = ['caneta', 'papel','lapis', 'pincel', 'abajur', 'isqueiro'];

    $result = contVog($str);
    
    print_r($result);

?>
<?php

    /*
    Exercício: Contar Consoantes
Descrição:
Crie uma função chamada countConsonants que recebe uma string como parâmetro e retorna a quantidade de consoantes presentes na string.

Requisitos:

Iterar sobre cada caractere da string.
Verificar se o caractere é uma consoante.
Ignorar espaços e caracteres não alfabéticos.
    */

    function countConsoantes($str) {
        $contag = 0;
        $consoantes = ['a', 'e', 'i', 'o', 'u'];

        foreach(str_split($str) as $ind) {
            if(in_array(strtolower($ind), $consoantes)){
                $contag++;
            }
        }
        return $contag;
    }

    $strin = 'testando palavras para function';

    $res = countConsoantes($strin);

    print_r($res);

?>
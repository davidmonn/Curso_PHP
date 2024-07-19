<?php

    /*
    Exercício: Contar Letras Específicas
Descrição:

Crie uma função chamada countSpecificLetters que recebe uma string e uma letra específica como parâmetros. A função deve retornar a quantidade de vezes que a letra específica aparece na string.


Requisitos:

Iterar sobre cada caractere da string: Utilize um loop para percorrer a string.
Comparar cada caractere com a letra específica: Verifique se o caractere atual é igual à letra fornecida.

    */

    function countSpecificLetters($arr) {
        $contagem = 0;
        $filtragem = ['a', 'e', 'i', 'o', 'u'];

        for($ind = 0; $ind < strlen($arr); $ind++) {
            $separacao = strtolower($arr[$ind]);
                if(in_array($separacao, $filtragem)) {
                    $contagem++;
            }
        }
        return $contagem;
    }

    $text = 'testando';

    $result = countSpecificLetters($text);

    print_r($result);

?>
<?php
    /*
    Contagem de Vogais
    Crie uma função chamada countVowels que recebe uma string como parâmetro.

    A função deve retornar a quantidade de vogais presentes na string.

    Utilize uma estrutura de repetição para percorrer cada caractere da string.

    Utilize uma variável para armazenar o contador de vogais.

    Considere que as vogais são as letras "a", "e", "i", "o" e "u", em minúsculas ou maiúsculas.
     */
    function countVowels($str) {

        $contVog = 0;
        $vogaisF = ['a', 'e', 'i', 'o', 'u'];

        foreach(str_split($str) as $letra) {
            if(in_array(strtolower($letra), $vogaisF)) {
                $contVog ++;
            }
        }
        return $contVog;
    }

    $string = 'Testando palavras aleatorias para a function';

    $end = countVowels($string);

    print_r($end);
?>
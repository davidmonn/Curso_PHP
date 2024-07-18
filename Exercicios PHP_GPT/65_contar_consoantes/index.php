<?php

    /*
    Exercício: Contar Consoantes
Descrição:

Crie uma função chamada countConsonants que recebe uma string como parâmetro. A função deve retornar a quantidade de consoantes presentes na string.

    Requisitos:

Iterar sobre cada caractere da string: Utilize um loop para percorrer a string.
Verificar se o caractere é uma consoante: Considere que as consoantes são todas as letras do alfabeto, exceto as vogais ('a', 'e', 'i', 'o', 'u').
Ignorar espaços e caracteres não alfabéticos: Apenas letras devem ser contadas como consoantes.

    */

    function percorreStr($str) {
        $cont = 0;
        $vogais = ['a', 'e', 'i', 'o', 'u'];

        for($ind = 0; $ind < strlen($str); $ind++) {
            $filt = strtolower($str[$ind]);
            if(ctype_alpha($filt) && !in_array($filt, $vogais)) {
                $cont++;
            }
        }
        return $cont;
    }

    $teste = "testando";

    $res = percorreStr($teste);

    print_r($res);

?>
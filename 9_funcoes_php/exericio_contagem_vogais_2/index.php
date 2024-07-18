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
        $vogais = ["a", "e", "i", "o", "u"];

        for($cont = 0; $cont < strlen($str); $cont++) {
            $recebVogais = strtolower($str[$cont]);
            if(in_array($recebVogais, $vogais)) {
                $contVog++;
            }
        }
        return $contVog;
    }

    $teste = 'Testando palavras de contagem na function';

    $resultado = countVowels($teste);

    print_r($resultado);
        
?>
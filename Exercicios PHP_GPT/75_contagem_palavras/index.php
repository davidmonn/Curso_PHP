<?php

    /*
    Exercício: Contagem de Palavras em uma Frase
Descrição: Crie uma função chamada contarPalavras que receba uma string (uma frase) e retorne o número total de palavras nessa frase. Considere palavras separadas por espaços.
    */

    function contarPalavras($frase) {
        $count = 0;

       $palavras = explode(' ',$frase);
       $count = count($palavras) ;

       return $count;
    }

    $texto = 'Testando contagem de string';

    $resultado = contarPalavras($texto);

    echo "Numero de palavras: $resultado";

?>
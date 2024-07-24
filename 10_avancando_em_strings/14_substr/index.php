<?php

    $str = "Esta é a minha string";

    $minha = substr($str, 10, 5); // String pai, INDICE INICIAL, COMPRIMENTO DA PALAVRA.

    echo $str . "<br>";

    echo $minha . "<br>";

    $str2 = "Testando esta string abc";

    $novaPalavra = substr($str2, 9); // OMITIR COMPRIMENTO = PEGA ATE O FIM

    echo $novaPalavra;

    $novaPalavra2 = substr($str2, 10, -3); // COMPRIMENTO NEGATIVO = REMOVE DO ULTIMO INDICE
    echo $novaPalavra2; // eliminou o abc com o -3

?>
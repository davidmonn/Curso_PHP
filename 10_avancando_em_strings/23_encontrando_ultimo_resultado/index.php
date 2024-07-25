<?php

    $str = "testando encontrado palavra teste, em uma string que tem teste";

    $palavra = strrpos($str, "teste");

    echo "$palavra <br>";

    $palavra2 = strpos($str, "teste");
    echo "$palavra2 <br>";

    if(strrpos($str, "Java") === false) {
        echo "A palavra Java, não foi encontrada <br>";
    }

    $p = substr($str, strpos($str, "teste"), 5); // Neste caso foi usado o substr para mostrar a palavra onde no final temos 5 pois e o comprimento da palavra e strpos para para dar o indice inicial para a substr, com isso nao precisamos saber o indice inical do substr

    echo "$p <br>";

?>
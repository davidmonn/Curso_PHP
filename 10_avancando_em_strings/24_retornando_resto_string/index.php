<?php

    $str = "testando o resto da string, pra ver se da certo";

    $resto = ucfirst(strstr($str, "resto"));

    echo "$resto <br>";

    $s = "string";

    $resto2 = ucfirst(strstr($str, $s));

    echo "$resto2";
    echo "<br>";


    if(strstr($str, ".net") === false) {
        echo "Palavra não encontrada <br>";
    }

?>
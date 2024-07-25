<?php

    $str = "Estamos testando o método strpos, com o str pos podemos encontrar strings";
    $testeEncontrar = strpos($str, "strpos");

    echo "$testeEncontrar <br>";

    $testeEncontrar2 = strpos($str, "JS");

    if($testeEncontrar2 !== false) {
        echo "$testeEncontrar2 <br>";
    } else {
        echo "Palavra nao localizada <br>";
    }

    $palavra = "to"; // Tomar cuidado pois mesmo nao havendo nem um "to", ele e localizado em me"to"do.

    $testeEncontrar3 = strpos($str, $palavra);

    if($testeEncontrar3 !== false) {
        echo "$testeEncontrar3 <br>";
    } else {
        echo "$testeEncontrar3 Nao localizado <br>";
    }

?>
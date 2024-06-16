<?php

    $a = true;

    if(is_bool($a)) {
        echo "Booleano 1 <br>";
    }

    if(is_bool(0)) {
        echo "Não é Booleano 2 <br>";
    }

    if(is_bool(2)) {
        echo "É Booleano 3 <br>";
    }

    if(is_bool(false)) {
        echo "É um Booleano 4 <br>";
    }

    if(0 == false) {
        echo "0 é Considerado Falso! <br>";
    }

    else {
        echo "Não é Booleano";
    }

?>
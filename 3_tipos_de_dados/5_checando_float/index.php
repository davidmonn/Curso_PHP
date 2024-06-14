<?php

    $a = "Teste";
    $b = 12.8;

    if(is_float($a)) {
        echo "Não é float 1! <br>";
    }

    if(is_float($b)) {
        echo "É Float 2! <br>";
    }

    if(is_float(6565.63)) {
        echo "É um Float 3! <br>";
    }

    if(is_float("Teste")) {
        echo "Não é um Float 4!";
    }
?>
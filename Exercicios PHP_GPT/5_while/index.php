<?php

    /*$inf = ["David", "PC", 55, 21, "Teste", true, [], 29, 41];

    $i = 0;
    $maior = 0;

    while($i < count($inf)) {

        if(is_int($maior > $inf[$i] && $inf[$i] > $maior)){
            $maior = $inf[$i];
        }

        $i++;

    }

    echo $i . "<br>";*/

    $inf = ["David", "PC", 55, 21, "Teste", true, [], 29, 41];

    $i = 0;
    $maior = 0;

    while($i < count($inf)) {
        if(is_int($inf[$i]) && $inf[$i] > $maior) {
            $maior = $inf[$i];
        }
        $i++;
    }

    echo "O maior número inteiro é: $maior";

?>


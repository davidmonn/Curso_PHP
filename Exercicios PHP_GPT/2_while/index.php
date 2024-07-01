<?php

    $numeros = [1, 5, 7, 8, 55, 25, 12, 15];

    $indice = 0;
    $x = $numeros[0];

    while($indice < count($numeros)) {
        if($numeros[$indice] > $x){
            $x = $numeros[$indice];
        }

        $indice++;

    }

    echo "O maior numero é $x";

?>
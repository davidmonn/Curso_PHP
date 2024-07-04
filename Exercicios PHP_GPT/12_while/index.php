<?php

    $numeros = [2,6,8,10,11,48,56,98,22,44,88];

    $ind = 0;
    $somaPares = 0;
    //$total = 0;

    while($ind < count($numeros)) {
        if ($numeros[$ind] % 2 == 0) {
            $somaPares += $numeros[$ind]; // Acumula a soma dos valores pares

            /*$total = $numeros[$ind];
            $somaPares = $total + $numeros[$ind];*/
        }
        $ind++;
    }

        echo "Soma dos valores pares é: $somaPares <br>";

    foreach($numeros as $indice => $valor){
        if($valor % 2 == 0){
            echo "$valor, ";
        }
    }



?>
<?php

    $valores = [1,2,3,4,787,48,89,7,54,96,44,115];

    $i = 0;
    $maiorValor = $valores[0];

    while($i < count($valores)){
        if($valores[$i] > $maiorValor){
            $maiorValor = $valores[$i];
        }
        $i++;
    }

    echo "Maior valor é: $maiorValor";

?>
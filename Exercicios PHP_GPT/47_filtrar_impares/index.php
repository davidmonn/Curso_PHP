<?php

    function filtImp($n){
        $valImp = [];

        for($contI = 0; $contI < count($n); $contI++) {
            if($n[$contI] % 2 != 0) {
                array_push($valImp, $n[$contI]);
            }
        }
        return $valImp;
    }

    $numeros = [];

    for($indArr = 0; $indArr < 10; $indArr++) {
        array_push($numeros, $indArr);
    }

    $resultado = filtImp($numeros);

    print_r($resultado);

?>
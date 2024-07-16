<?php
    function number($nFunc) {
        $valores = [];

        for($iFunc = 0; $iFunc < count($nFunc); $iFunc++) {
            if($nFunc[$iFunc] > 7) {
                array_push($valores, $nFunc[$iFunc]);
            }
        }
        return $valores;
    }

    $numeros = [];

    for($i = 7; $i <= 20; $i++) {
        array_push($numeros, $i);
    }

    $resultFinal = number($numeros);

    print_r($resultFinal);
    
?>
<?php

    function somaImp($soma) {
        $arrImp = 0;

        foreach($soma as $val) {
            if($val % 2 != 0) {
                echo $val ." , ";
                $arrImp += $val;
            }
        }
        return $arrImp;
    }

    $numeros = [];

    for($i = 0; $i < 30; $i++){
        array_push($numeros, $i);
    }

    $final = somaImp($numeros);

    print_r($final);

?>
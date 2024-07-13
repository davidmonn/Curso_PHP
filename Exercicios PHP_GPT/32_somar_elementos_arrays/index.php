<?php

    function calculoArrays($arr1, $arr2) {
        $menorValor = min(count($arr1), count($arr2));
        $result = [];

        for($i = 0; $i < $menorValor; $i++) {
            $result[] = $arr1[$i] + $arr2[$i];
        }
        return $result;
    }

    $array1 = [2,8,9];
    $array2 = [5,15,21];

    $final = calculoArrays($array1, $array2);

    print_r($final);

?>
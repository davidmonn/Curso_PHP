<?php

    $arr1 = [1,2,3];
    $arr2 = [2,4,6];
    $arr3 = [4,6];

    $result = array_diff($arr1, $arr2);
    print_r($result);
    echo "<br>";

    $result = array_diff($arr2, $arr1);
    print_r($result);
    echo "<br>";

    $result = array_diff($arr2, $arr1, $arr3); // Resultou em um array vazio pois todos os valores foram encontrados
    print_r($result);
    echo "<br>";

?>
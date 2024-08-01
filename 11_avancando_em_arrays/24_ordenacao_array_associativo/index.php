<?php

    $arr = [
        'David' => 27,
        'Suzana' => 32,
        'Bianca' => 55,
        'Tita' => 40
    ];
    asort($arr); // Ordena de forma do menor para maior em consideracao o valor da chave
    print_r($arr);
    echo "<br>";

    $arr2 = [
        'David' => 27,
        'Suzana' => 32,
        'Bianca' => 55,
        'Tita' => 40
    ];
    arsort($arr2); // Ordena do maior para o menor levando em conta o valor da chave
    print_r($arr2);
    echo "<br>";

    $arr3 = [
        'David' => 27,
        'Suzana' => 32,
        'Bianca' => 55,
        'Tita' => 40
    ];
    ksort($arr3); // Ordena do menor para o maior levando em conta a chave
    print_r($arr3);
    echo "<br>";

    $arr4 = [
        'David' => 27,
        'Suzana' => 32,
        'Bianca' => 55,
        'Tita' => 40
    ];
    krsort($arr4); // Ordena do maior para o menor levando em conta a chave
    print_r($arr4);
    echo "<br>";

?>
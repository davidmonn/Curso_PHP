<?php
    // Adicionando Valores
    $arr = [];

    print_r($arr);
    echo "<br>";

    $arr[0] = 10;

    print_r($arr);
    echo "<br>";

    $arr[1] = 15;

    print_r($arr);
    echo "<br>";

    $arr[5] = 25;

    print_r($arr);
    echo "<br>";


    // Modificar valores
    $arr[1] += 55; // Com isso ele ira fazer a atribuicao dos 55 com 15 do antigo indice 1

    print_r($arr);
    echo "<br>";

    $arrAssoc = [];
    print_r($arrAssoc);
    echo "<br>";

    $arrAssoc['Carro'] = 'BMW';
    print_r($arrAssoc);
    echo "<br>";

    $arrAssoc['Avião'] = 'Boeing';
    print_r($arrAssoc);
    echo "<br>";

    //Modificacao
    $arrAssoc['Carro'] = 'Ferrari';
    print_r($arrAssoc);
    echo "<br>";


?>
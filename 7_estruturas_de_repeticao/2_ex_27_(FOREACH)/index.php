<?php

    $arr = [
        'pessoa1' => "David",
        'number1' => 1,
        'number2' => 2,
        'nome2' => "Tita",
        'nome3' => "Joao",
        'number3' => 3,
        'nome4' => [],
        'nome5' => true,
        'number4' => 4,
        'number5' => 5
    ];

    $b = count($arr);
    $c = 0;

    foreach ($arr as $sla => $valuee) {
        if (is_string($valuee)) {
            echo $valuee . "<br>";
        }
    }
?>
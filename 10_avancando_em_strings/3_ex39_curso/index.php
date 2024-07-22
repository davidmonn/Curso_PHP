<?php


    function itensCaros($caros) {
        $itensCaros = [];

        foreach($caros as $i => $item) {
            if($item > 10) {
                array_push($itensCaros, $i);
            }
        }
        return $itensCaros;
    }

    $arr = [
        'Porta' => 100,
        'Macaneta' => 5,
        'Motor' => 2000,
        'Retrovisor' => 8
    ];

    $result = itensCaros($arr);
    
    print_r($result);

?>
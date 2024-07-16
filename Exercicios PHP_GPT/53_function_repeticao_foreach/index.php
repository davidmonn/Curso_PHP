<?php

    function maioresSte($valF) {
        $nFunc = [];

        foreach($valF as $indF) {
            
            if($indF > 7) {
                array_push($nFunc, $indF);
            }
        }

        return $nFunc;
    }

    $valores = [];

    foreach(range(8,19) as $i) {
        if($i < 20) {
            array_push($valores, $i);
        }
    }

    $result = maioresSte($valores);

    print_r($result);

?>
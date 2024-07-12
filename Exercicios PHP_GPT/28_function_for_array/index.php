<?php

    $arr = [];

    for($ind = 0; $ind < 20; $ind++) {
         array_push($arr, $ind);
    }

    function filterPares($pares) {
        $result = [];

        for($i = 0; $i < count($pares); $i++) {
            if($pares[$i] % 2 == 0) {
                array_push($result, $pares[$i]);
            }
        }
        return $result;
    }

    $result = filterPares($arr);

    print_r($result);

?>
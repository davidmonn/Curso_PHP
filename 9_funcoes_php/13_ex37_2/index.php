<?php

    function sumEvenNumbers($n) {
        $receb = 0;
        $arrF = range(1, $n);

        foreach($arrF as $indF) {
            if($indF % 2 == 0) {
                $receb += $indF;
            }
            $indF++;
        }
        return $receb;
    }

    $arr = 25;

    $result = sumEvenNumbers($arr);

    print_r($result);

?>
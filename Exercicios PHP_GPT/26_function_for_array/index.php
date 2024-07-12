<?php

    $numbers = [];

    for($ind = 0; $ind < 20; $ind++) {
        array_push($numbers , $ind);
    }

    function filterOddNumbers($parm) {
        $newArr = [];

        for($i = 0; $i < count($parm); $i++) {
            if($parm[$i] % 2 != 0){
                array_push($newArr, $parm[$i]);
            }
        }
        return $newArr;
    }

    $val = filterOddNumbers($numbers);

    print_r($val);

?>
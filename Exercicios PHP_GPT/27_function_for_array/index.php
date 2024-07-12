<?php

    $numbers = [];

    for($ind = 1; $ind < 30; $ind++) {
        array_push($numbers, $ind);
    }

    function filterMultiplesThree($multiplo) {
        $mult = [];

        for($i = 0; $i < count($multiplo); $i++) {
            if($multiplo[$i] % 3 == 0)
            array_push($mult, $multiplo[$i]);
        }
        return $mult;
    }

    $result = filterMultiplesThree($numbers);

    print_r($result) . "<br>";

?>
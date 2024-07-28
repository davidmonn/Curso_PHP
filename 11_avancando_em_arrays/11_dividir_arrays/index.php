<?php

    $arr = range(1,20);

    print_r(array_chunk($arr, 4));
    echo "<br>";

    $arrMult = array_chunk($arr, 10);
    print_r($arrMult);
    echo "<br>";

    $arrMult = array_chunk($arr, 10);
    print_r($arrMult[1]);
    echo "<br>";

?>
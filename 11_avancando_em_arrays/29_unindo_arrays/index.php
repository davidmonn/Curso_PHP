<?php

    $arr1 = [1,2,3];
    $arr2 = [10,40,90];
    $arr3 = [2.1, 44.5, 43.3];
    $str = ['tambem', 'funciona', 'com', 'strings'];

    $arrMerge = array_merge($arr1, $arr2, $arr3, $str);

    print_r($arrMerge);
    echo "<br>";
    print_r($arr1);

?>
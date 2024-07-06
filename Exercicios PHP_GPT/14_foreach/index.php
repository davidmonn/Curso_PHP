<?php

    $nums = [1,2,3,4,6,8,15,20];

    $ind = 0;
    $mult = 0;

    foreach($nums as $num) {
        $mult = $num * 2;
        echo "$num = $mult <br>";
    }

?>
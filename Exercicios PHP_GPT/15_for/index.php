<?php

    // CONTADOR ; CONDIÇÃO ; INCREMENTO/DECREMENTO

    $nums = [1,3,5,7,8,9,10,15,17];

    for($i = 0; $i < count($nums); $i++) {
        $quad = pow($nums[$i], 2);

        echo "$i ao quadrao = $quad <br>";
    }

?>
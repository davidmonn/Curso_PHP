<?php

    $n1 = 4;
    $n2 = 3;
    $n1 += $n2;
    
    $v1 = 8;
    $v2 = 2;
    $v1 -= $v2;

    echo $n1 > $v1 || $n2 >= $v2 ? "True = $n1 > $v1 || $n2 >= $v2 <br>" : "False";

    echo $n1 >= $v1 && $v2 >= $v1 ? "True <br>" : "False = $n1 >= $v1 && $v2 >= $v1";

?>
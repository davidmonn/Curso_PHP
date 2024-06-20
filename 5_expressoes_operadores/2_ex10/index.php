<?php

    $a = 2;
    $b = 4;
    $c = 5;
    $d = 7;

    $x = ($a * $d - $c) /$b;

    echo "($a - $b) * $c / $d = ";
    echo ($a - $b) * $c / $d;
    echo "<br>";
     
    function teste($n1, $n2, $n3, $n4) {
        echo "($n1 + $n2 * $n3) / $n4 = ";
        echo ($n1 + $n2 * $n3) / $n4;
    }

    teste(2, 3, 5, 1);

?>
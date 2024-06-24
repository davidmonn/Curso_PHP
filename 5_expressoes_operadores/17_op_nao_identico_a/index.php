<?php

    $a = 1;
    $b = "1";

    if($a != $b) {
        echo "A é diferente de B <br>";
    }

    if($a !== $b) {
        echo "A é diferente de B - 2 <br>";
    }

    if(1 !== 2) {
        echo "Não é identico 3 <br>";
    }

    if(1 !== "1") {
        echo "A é diferente de B 4 <br>";
    }

?>
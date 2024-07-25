<?php

    /*
    Exercício 44

Converta a seguinte array para uma string:
[“O”, “PHP”, “é”, “muito”, “legal” ];

    */

    $arr = ["O", "PHP", "é", "muito", "legal"];
    $str = implode(" ",$arr);
    
    echo "$str <br>";
    echo "<br>";

    foreach($arr as $imp) {
        echo "$imp <br>";
    }

    echo "<br>";

    for($i = 0; $i < count($arr); $i++) {
        echo "$arr[$i] <br>";
    }

?>
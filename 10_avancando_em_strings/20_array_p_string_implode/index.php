<?php

    $arr = ["Maçã", "Pera", "Mamão", "Batata"];

    $str = implode(", ", $arr);

    echo $str . "<br>";

    $arr2 = ["Avião", "Tanque", "Jipe", "Combustivel"];

    $str2 = implode(" <-> ", $arr2);
    echo "$str2 <br>";

?>
<?php

    $x = 10;

    echo "$x Global <br>";


    function teste(){

        $x = 5;

        echo "$x Local 1 <br>";

    }

    teste();

    echo "$x <br>";

    teste();

    $nom = "David";

    echo "$nom <br>";

    function name(){

        $nom = "TESTE";

        echo "$nom LOCAL 2";
        
    }

    name();
    echo "<br>";
    echo "$nom";

?>
<?php

    //Definição do contador
    $x = 0;

    //Inicio /Definição da estrutura
    while($x < 10) {

        // Corpo do loop
        echo $x . "<br>";

        //Incremento do contador
        //$x = $x +1;
        $x++;
    }

    echo "Continuando o código <br>";

    $y = 0;

    while($y <= 10) {
        echo $y . "<br>";

        //$y = $y +2; ou
        $y+= 2;
    }

    echo "Continuando o código <br>";

    $z = 10;

    while($z > 0) {
        echo $z . "<br>";

        //$y = $y +2; ou
        $z--;
    }

    echo "Continuando o código <br>";

    $a = 10;

    while($a > 0) {
        if($a % 2 != 0)
        echo $a . "<br>";

        $a--;
    }

?>
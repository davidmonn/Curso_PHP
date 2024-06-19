<?php

    function teste(){ // Funcao de Escopo Local

        $a = 0;
        $a++;

        echo "$a <br>";

    }

    teste();
    teste();
    teste();

    echo "<br>";
    echo "Teste Static <br>";

    function testeStatic() {

        static $a = 0;
        $a++;

        echo "$a <br>";

    }

    testeStatic();
    testeStatic();
    testeStatic();

?>
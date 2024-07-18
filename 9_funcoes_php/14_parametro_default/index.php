<?php

    function teste($a = "teste") {

        echo "O valor de a é $a <br>";

    }

    $a = "David";

    teste();
    teste("dasd");
    teste($a);

    function testando($a, $b = "x") {

        echo "O valor de a é $a de b é $b <br>";

    }

    testando("1", );
    testando("1", 15);

?>
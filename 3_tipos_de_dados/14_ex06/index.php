<?php

    $car = [
        'marca' => 'Chevrolet', 
        'carro' => 'Opala', 
        'motor' => 'SL 4.1 1991 é de 121 cv',
        'velocidade' => 169,
        'blindado' => false,
    ];

    print_r($car);
    echo "<br>";
    echo "<br>";

    print_r($car['marca']);
    echo "<br>";

    print_r($car['carro']);
    echo "<br>";

    echo ($car['motor']);
    echo "<br>";
    echo "<br>";

    $marca = $car ['marca'];
    $velocidade = $car ['velocidade'];
    $motor = $car ['motor'];

    echo "A marca do carro é $marca, sua velocidade maxima é de $velocidade km/h e tem o motor $motor";

?>
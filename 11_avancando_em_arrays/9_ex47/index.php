<?php

    /*
    Exercício 47

Crie um array com os seguintes valores: jaguar, 3.0, 18, Teto Solar, automatico;
Chame este array de carro;
Crie variáveis com base nesse array;

    */

    $carro = ['jaguar', 3.0, 'azul', 18, 'Teto Solar', 'automatico'];
    list($marca, $motor, $cor, $aro, $opcao, $cambio) = $carro;
    print_r($carro);
    echo "<br>";


    echo "$marca <br>";
    echo "$motor <br>";
    echo "$cor <br>";
    echo "$aro <br>";
    echo "$opcao <br>";
    echo "$cambio <br>";

?>
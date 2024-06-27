<?php

    $vel1 = 35;
    $vel2 = 40;
    $vel3 = 50;
    $vel4 = 55;
    $limite = 40;

    $msg = "Velocidade correta <br>";
    $msg2 = "Alerta - Tomar cuidado com a velocidade <br>";
    $msg3 = "MULTA <br>";

    if($vel3 <= $limite) {
        echo $msg;
    } else if ($vel3 == $limite) {
        echo $msg2;
    } else if ($vel3 > $limite) {
        echo $msg3;
    } else {
        echo "Informação invalida <br>";
    }

    if($vel2 < $limite) {
        echo $msg;
    } else if($vel2 == $limite) {
        echo $msg2;
    } else if($vel2 > $limite) {
        echo $msg3;
    }

    if($vel1 < $limite) {
        echo $msg;
    } else if($vel1 == $limite) {
        echo $msg2;
    }
?>
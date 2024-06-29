<?php

    function compararNumeros($n1, $n2) {
        
        $msg = "O primeiro número é maior. <br>";
        $msg2 = "O segundo número é maior. <br>";
        $msg3 = "Os números são iguais. <br>";
        
        if($n1 == $n2){
            echo $msg3;

        } else if($n1 < $n2) {
            echo $msg2;

        } else if($n1 > $n2) {
            echo $msg;

        } else{
            echo "Valor invalido";
        }

    }
    compararNumeros(21, 21);
    compararNumeros(21, 37);
    compararNumeros(55, 27);
    
?>
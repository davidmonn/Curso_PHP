<?php

    if(5 == "5"){ // Temos que tomar cuidado com isso em nosso codigo pois, sao numeros parecidos e da true mas um é uma string, enquanto a outra é um inteiro
        echo "5 é igual a 5 (1)<br>";
    }


    // Operador Identico
    if(5 === "5"){
        echo "5 é igual a 5 (2)<br>";
    }

    // Operador Identico
    if(5 === 5){
        echo "5 é igual a 5 (3)<br>";
    }

    $a = 4;
    $b = 4;
    $c = "Teste";

    if($a === $b){
        echo "A é igual a B <br>";
    }

    if($a === $c){
        echo "A é igual a c <br>";
    }

?>
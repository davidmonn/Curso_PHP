<?php

    $nome = "David <br>";
    $contador = 0;

    do {

        echo "Testando do while $contador <br>";

        if($contador == 5){
            echo $nome;
        }

        $contador++;
            
        

    } while($contador < 10);

    echo "<br>";
    $inicio = 10;

    do{
        Echo "Decremento do whule $inicio <br>";

        if($inicio == 8) {
            echo $nome;
        }

        $inicio--;
    }while($inicio > 0);

?>
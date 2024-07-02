<?php

    $n = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];

    $inicio = 0;

    while($inicio < count($n)){

        $numeroAtual = $n[$inicio]; // Para simplificar
    
    if($numeroAtual == 30 || $n[$inicio] == 40) { // Um simplificado e outro normal, ambos poderiam estar simplifados, deixado assim para ver a diferenca.

        echo "Limite de 30 || 40 <br>";

        $inicio++;
        continue;
    }
    
    echo "Elementos: $n[$inicio] <br>";
    $inicio++;

    }












    
    /*
    while($inicio < count($n)){

        echo "Loop $inicio <br>";

        if($inicio == 30 || $inicio == 40) {
            echo "Chegou ao limite $inicio <br>";

            $inicio+=10;

            continue;
        }

        while($inicio == 40) {
            echo "Continuando loop $inicio <br>";
        }

        $inicio=+10;

    }
    */
?>
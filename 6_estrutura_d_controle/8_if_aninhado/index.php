<?php

    if(10 > 2) {
        echo "Entrou no primeiro if 1<br>";

        if("teste" === "teste" && 2 === 2) {

            echo "Entrou no segundo if 1<br>";

        }

    }

    if(2 == 2 && "texto" === "texto") {

        echo "Entrou no primeiro if 2<br>";

        if(2 != 2 && 1 === 1) {
            echo "Entrou no segundo if 2<br>";
        } else {
            echo "Entrou no segundo else 2<br>";
        }

    }

    if(5 < 2) {
        echo "Entrou no primeiro if 3<br>";

        if(10 < 3) {
            echo "Entrou no segundo if 3<br>";
        } else {
            echo "Entrou no segundo else 3<br>";
        }

    } else {
        echo "Entrou no primeiro else 3 <br>";
    }

?>
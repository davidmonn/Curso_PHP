<?php

    /*
    Exercício 53
    Crie uma classe cachorro;
    Crie o método latir e andar;
    Execute o método em novas instâncias da classe;
    */

    class Cachorro {
        function latir() {
            echo "au au au <br>";
        }
    
        function andar($direcao) {
            if ($direcao == "cima") {
                echo $direcao . "<br>";
            } elseif ($direcao == "direita") {
                echo "$direcao <br>";
            } elseif ($direcao == "baixo") {
                echo "baixo <br>";
            } elseif ($direcao == "esquerda") {
                echo "esquerda <br>";
            } else {
                echo "direção inválida <br>";
            }
        }
    }

    $pug = new Cachorro;
    $pug -> andar('direita');
    $pug -> latir();

    $pastorAlemao = new Cachorro;
    $pastorAlemao -> latir();
    $pastorAlemao -> andar('baixo');

?>
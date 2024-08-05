<?php

    class Cachorro {
        function latir() {
            echo "Au Au Au <br>";
        }

        function andar($m) {
            echo "O cachorro andou $m metros <br>";
        }
    }

    $viraLata = new Cachorro;
    $pastorAlemao = new Cachorro;

    $viraLata -> latir();
    $pastorAlemao -> latir();

    $viraLata -> andar(500);
    $pastorAlemao -> andar(1000);

?>
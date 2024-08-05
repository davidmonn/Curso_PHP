<?php

    class Pessoa {

        function falar() {
            echo "Olá, eu sou um objeto <br>";
        }

        function somar($x, $y) {
            echo $x + $y . "<br>";
        }

    }

    $david = new Pessoa;

    $david -> falar();

    $suzana = new Pessoa;
    $suzana -> falar();

    $david -> somar(5,5);
    $suzana -> somar(5,10);

?>
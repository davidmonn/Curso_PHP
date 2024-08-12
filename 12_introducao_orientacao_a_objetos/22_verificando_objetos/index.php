<?php

    class Humano {
        public function falar() {
            echo "Ola <br>";
        }
    }

    $suzana = 24;
    $david = new Humano;
    
    if(is_object($david)) {
        echo "É um um objeto <br>";
    } else {
        echo "Não é um objeto <br>";
    }

    if(is_object($suzana)) {
        echo "É um um objeto <br>";
    } else {
        echo "Não é um objeto <br>";
    }

    echo get_class($david) . "<br>";

    if(method_exists($david, "falar")) {
        echo "Metodo existe <br>";
    } else {
        echo "Metodo nao existe <br>";
    }

    if(method_exists($david, "asd")) {
        echo "Metodo existe <br>";
    } else {
        echo "Metodo nao existe <br>";
    }

?>
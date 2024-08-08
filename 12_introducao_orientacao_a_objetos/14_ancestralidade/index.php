<?php

    class Humano {
        
    }
    class Animal {

    }

    class Professor extends Humano{

    }

    $david = new Humano; // 1 class
    $cachorro = new Animal; // 2 class
    $suzana = new Professor; // 3 class

    if($david instanceof Humano) {
        echo "David é um humano <br> <br>";
    } else {
        echo "David não é um humano <br> <br>";
    }

    if($cachorro instanceof Humano) {
        echo "Cachorro é um humano <br> <br>";
    } else {
        echo "Cachorro não é um humano <br> <br>";
    }

    if($suzana instanceof Professor) { // Nesse caso tambem dara como é um humano, pois recebeu heranca do extends
        echo "Suzana é um Professor = Teste class Professor <br> <br>";
    } else {
        echo "Suzana não é um Professor = Teste class Professor";
    }

    if($suzana instanceof Humano) { // Nesse caso tambem dara como é um humano, pois recebeu heranca do extends
        echo "Suzana é um humano = Teste class Humano <br> <br>";
    } else {
        echo "Suzana não é um humano = Teste class Humano <br> <br>";
    }

?>
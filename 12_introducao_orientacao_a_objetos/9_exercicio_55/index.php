<?php

    /*
    Exercício 55
    Crie uma classe Carro;
    Crie algumas propriedades e também a propriedade velocidade_maxima;
    Crie o método setVelocidadeMaxima, onde é possível alterar a velocidade máxima do carro;
    E também getVelocidadeMaxima onde é possível imprimir a velocidade do carro;
    */

    class Carro {
        public $modelo;
        public $portas;
        public $cor;
        public $velocidade_maxima;

        function setVelocidadeMaxima($max) {
            $this->velocidade_maxima = $max;
        }
        function getVelocidadeMaxima() {
            return "A velocidade é de: " . $this->velocidade_maxima . " km/h";
        }
        
    }

    $fusca = new Carro;
    $fusca->modelo = 'Fusca';
    $fusca->portas = 2;
    $fusca->cor = 'Azul';

    echo "O carro é um $fusca->modelo, tem $fusca->portas e sua cor é: $fusca->cor <br>";
    $fusca->setVelocidadeMaxima(120);
    echo $fusca->getVelocidadeMaxima();
?>
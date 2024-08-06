<?php

    class Carro {
        public $cor;
        public $portas;
        public $velocidade_maxima;

        function setVelocidadeMaxima($vel) {
            $this->velocidade_maxima = $vel;
        }
        function getVelocidadeMaxima() {
            return "A velocidade maxima do carro é de: $this->velocidade_maxima km/h";
        }
    }

    $bmw = new Carro;

    $bmw->cor = 'Preto';
    $bmw->portas = 4;
    $bmw->setVelocidadeMaxima(200);
    echo $bmw->getVelocidadeMaxima();

?>
<?php

    interface Caracteristicas {

        const nome = "David";
        public function falar();

    }

    class Humano implements Caracteristicas {

        public $idade = 27;
        public function falar() {
            echo "Olá, seja bem vindo <br>";
        }
        public function dizerNome() {
            echo "Meu nome é " . self::nome . "<br>";
        }

    }

    $david = new Humano;
    $david->falar();
    $david->dizerNome();

?>
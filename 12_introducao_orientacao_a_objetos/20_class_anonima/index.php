<?php

    $pessoa = new class() {

        public $nome = "David";
        public function dizerNome() {
            echo "Ola meu nome é {$this->nome} <br>";
        }

    };

    echo "$pessoa->nome <br>";
    echo $pessoa->dizerNome();

?>
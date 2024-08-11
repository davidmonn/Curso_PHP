<?php

    /*
    Exercício 57

Crie uma classe cachorro com propriedades;
Inicie as propriedades via construtor;
Crie um método para exibir cada um das propriedades que você criou;

    */

    interface RacasCachorro {
        public function exibir();
    }

    class Cachorro implements RacasCachorro {
        public $nome;
        public $raca;
        public $idade;
        public $temperamento;

        function __construct($nome, $raca, $idade, $temperamento) {
            $this->nome = $nome;
            $this->raca = $raca;
            $this->idade = $idade;
            $this->temperamento = $temperamento;
        }
        public function exibir() {
            echo "Seu nome é {$this->nome} raca {$this->raca} tem {$this->idade} anos e tem um temperamento {$this->temperamento} <br>";
        }
    }

    $pug = new Cachorro("Bob", "Pug", 2, "calmo");
    $pug->exibir();

    $chowchow = new Cachorro("Jack", "Chow Chow", 4, "nervoso");
    echo "Seu nome é {$chowchow->nome} da raca {$chowchow->raca}, tem {$chowchow->idade} anos e tem um temperamento {$chowchow->temperamento} <br>";

    $pitbull = new Cachorro("Scooby", "Pitbull", 1, "docil");
    echo "Seu nome é {$pitbull->nome} da raca {$pitbull->raca}, tem {$pitbull->idade} anos e tem um temperamento {$pitbull->temperamento} <br>";

?>
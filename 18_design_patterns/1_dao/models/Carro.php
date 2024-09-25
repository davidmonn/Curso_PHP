<?php

    class Carros {
        // Todas estao privadas pois elas seram alteradas, via metodos.
        private $id;
        private $marca;
        private $km;
        private $cor;

        // Agora iremos criar metodos com capacidades de resgatar esses dados e tambem inserir, porem nada a nivel de banco mas a de objeto.

        public function getId() { // resgatar id
            return $this->id;
        }
        public function setId($id) { // receber id
            $this->id = $id;
        }

        public function getMarca() {
            $this->marca;
        }
        public function setMarca($marca) {
            $this->marca = $marca;
        }

        public function getKm() {
            $this->km;
        }
        public function setKm($km) {
            $this->km = $km;
        }

        public function getCor() {
            $this->cor;
        }
        public function setCor($cor) {
            $this->cor = $cor;
        }
    }

    interface CarDAO {
        public function create(Carros $carros);// Dentro de seu parametro teremos um objeto da classe que estamos criando, estamos sempre mandando o carro para ser criado pois temos que ter o objeto completo
        public function findAll(); // Usado para resgatar todos os dados sem nenhum filtro
        
    }
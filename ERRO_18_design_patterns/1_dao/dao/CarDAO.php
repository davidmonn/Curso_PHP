<?php

    include_once("models/Carro.php"); // Inclui a definição da classe Carro para permitir sua manipulação no CarDAO.php

    class CarrosDAO implements CarDAOInterface {

        private $conn;

        public function __construct(PDO $conn) {
            $this->conn = $conn;
        }

        public function findAll() {

        }

        public function create(Car $car) {
            $stmt = $this->conn->prepare("INSERT INTO carros(marca, km, cor) VALUES(:marca, :km, :cor)");
            $stmt->bindParam(":marca", $car->getMarca());
            $stmt->bindParam(":km", $car->getKm());
            $stmt->bindParam(":cor", $car->getCor());

            try{
                $stmt->execute();
                echo "Valor inserido com sucesso!";
            } catch(PDOException $e) {
                $erro = $e->getMessage();
                echo "Erro: $e";
            }
        }

    }

?>
<?php

    // Aqui iremos receber o objeto pronto e sera inserido no banco

    include_once("models/Carro.php"); // Inclui a definição da classe Carro para permitir sua manipulação no CarDAO.php

    class CarDAO implements CarDAOInterface {

        private $conn;

        public function __construct(PDO $conn) {
            $this->conn = $conn;
        }

        public function findAll() {

            $cars = [];
      
            $stmt = $this->conn->query("SELECT * FROM carros");
      
            $data = $stmt->fetchAll();
      
            foreach($data as $item) {
      
              $car = new Car();
      
              $car->setId($item["id"]);
              $car->setMarca($item["marca"]);
              $car->setKm($item["km"]);
              $car->setCor($item["cor"]);
      
              $cars[] = $car;
      
            }
      
            return $cars;
      
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
<?php
    include_once("db.php"); // Para pegar conexao do banco
    include_once("dao/CarDAO.php");

    $carDao = new CarrosDAO($conn);

    $marca = $_POST["marca"];
    $km = $_POST["km"];
    $cor = $_POST["cor"];
    
    $newCar = new $newCar();

    $newCar->setMarca($marca);
    $newCar->setKm($km);
    $newCar->setCor($cor);

    $carDao->create($newCar);

    header("Location: index.php"); // Para mandar para a home
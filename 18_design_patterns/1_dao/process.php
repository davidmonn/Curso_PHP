<?php

    //Aqui no processamento, sara enviado os dados para o nosso CarDAO.php
    
    include_once("db.php"); // Para pegar conexao do banco
    include_once("dao/CarDAO.php");

    $carroDao = new CarDao($conn);

    $marca = $_POST["marca"];
    $km = $_POST["km"];
    $cor = $_POST["cor"];
    
    $newCar = new Car();

    $newCar->setMarca($marca);
    $newCar->setKm($km);
    $newCar->setCor($cor);

    $carroDao->create($newCar) ;

    header("Location: index.php"); // Para mandar para a home
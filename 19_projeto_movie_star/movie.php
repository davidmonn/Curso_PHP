<?php
  require_once("templates/header.php");

  // Verifica se o usuario esta autenticado
  require_once("models/Movie.php");
  require_once("dao/MovieDAO.php");
  require_once("models/Message.php");

  // Pegar id do filme

  $id = filter_input(INPUT_GET, "id");

  $movie;

  $movieDao = new MovieDAO($conn, $BASE_URL);

  if(empty($id)) {

    $message->setMessage("Filme não encontrado ", "error", "back");

  } else {

    $movie = $movieDao->findById("$id");

    // Verifica se o filme foi encontrado ou nao existe

    if(!$movie) {

        $message->setMessage("Filme não encontrado ", "error", "back");

    }

  }
  
?>
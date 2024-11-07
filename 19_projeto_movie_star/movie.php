<?php
  require_once("templates/header.php");

  // Verifica se o usuario esta autenticado
  require_once("models/Movie.php");
  require_once("dao/MovieDAO.php");
  require_once("models/Message.php");

  // Pegar id do filme

  $id = filter_input(INPUT_GET, "id");
  $id = filter_input(INPUT_GET, "id", FILTER_VALIDATE_INT);

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

  <div id="main-container" class="container-fluid">
    <div class="row">
      <div class="offset-md-1 col-md-6 movie-container">
        <h1 class="page-title"><?= $movie->title ?></h1>
        <p class="movie-details">
          <span>Duração: <?= $movie->length ?></span>
          <span class="pipe"></span>
          <span><?= $movie->category ?></span>
          <span class="pipe"></span>
          <span><i class="fas fa-star"> </i>9</span>
        </p>
        <iframe src="<?= $movie->trailer ?>" width="560px" height="315px" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; pictuare-in-pictuare" allowfullscreen></iframe>
        <p><?= $movie->description ?></p>
      </div>
    </div>
  </div>

  <?php

  require_once("templates/footer.php");

  ?>
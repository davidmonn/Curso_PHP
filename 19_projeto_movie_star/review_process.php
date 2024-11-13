<?php

  require_once("globals.php");
  require_once("db.php");
  require_once("models/Movie.php");
  require_once("models/Review.php");
  require_once("models/Message.php");
  require_once("dao/UserDAO.php");
  require_once("dao/MovieDAO.php");
  require_once("dao/ReviewDAO.php");

  $message = new Message($BASE_URL);
  $userDao = new UserDAO($conn, $BASE_URL);
  $movieDao = new MovieDAO($conn, $BASE_URL);
  $reviewDao = new ReviewDAO($conn, $BASE_URL);
  
   // Recebendo o tipo do formulario
   $type = filter_input(INPUT_POST, "type");

   // Resgata dados do usuário
  $userData = $userDao->verifyToken();

  if($type === "create") {

    // Recebendo dados do POST
    $rating = filter_input(INPUT_POST, "rating");
    $review = filter_input(INPUT_POST, "review");
    $movies_id = filter_input(INPUT_POST, "movies_id");
    $users_id = $userData->id;
    
    $reviewObject = new Review();

    $movieData = $movieDao->findById($movies_id);

    // Validando se o filme existe
    if($movieData) {

      // Verificando dados minimos
      if(!empty($rating) && !empty($review) && !empty($movies_id)) {

        $reviewObject->rating = $rating;
        $reviewObject->review = $review;
        $reviewObject->movies_id = $movies_id;
        $reviewObject->users_id = $users_id;

        $reviewDao->create($reviewObject);

      } else {

        $message->setMessage("Por favor insira a nota e comentario.", "error", "back");

      }

    } else {
      
      $message->setMessage("Erro, informações invalidas.", "error", "back");

    }

  } else {

    $message->setMessage("Informacões invalidas.", "error", "index.php");

  }

?>
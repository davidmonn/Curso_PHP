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

  // Checar se o filme te imagem
  if($movie->image == "") {
    $movie->image = "movie_cover.jpg";
  }

  // Checar se o filme e do usuario
  $userOwnsMovie = false;
  if(!empty($userData)) {
    if($userData->id === $movie->users_id) {
      $userOwnsMovie = true;
    }
  }
  // Resgatar as Reviews dp filme

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
      <div class="col-md-4">
          <div class="movie-image-container" style="background-image: url('<?=$BASE_URL ?>/img/movies/<?= $movie->image ?>');"></div>
      </div>
      <div class="offset-md-1 col-md-10" id="reviewss-container">
        <h3 id="reviews-title">Avaliações: </h3>
        <!-- Verifica se habilita a review para o usuario ou nao -->
         <div class="col-md-12" id="review-from-container">
          <h4>Envie sua avaliação:</h4>
          <p class="page-description">Preencha o formulário com a nota e comentário sobre o filme:</p>
          <form action="<?= $BASE_URL ?>review_process.php" method="POST" id="review-form">
            <input type="hidden" name="type" value="create">
            <input type="hidden" name="movies_id" value="<?= $movie->id ?>">
              <div class="form-group">
                <label for="rating">Nota do filme:</label>
                <select name="rating" id="rating" class="form-control">
                  <option value="">Selecione
                    <option value="10">10</option>
                    <option value="9">9</option>
                    <option value="8">8</option>
                    <option value="7">7</option>
                    <option value="6">6</option>
                    <option value="5">5</option>
                    <option value="4">4</option>
                    <option value="3">3</option>
                    <option value="2">2</option>
                    <option value="1">1</option>
                  </option>
                </select>
              </div>
              <div class="form-group">
                <label for="review">Seu comentário:</label>
                <textarea name="review" id="review" rows="3" class="form-control" placeholder="Digite seu comentário sobre o filme!"></textarea>
              </div>
              <input type="submit" value="Enviar comentário" class="btn card-btn">
          </form>
         </div>
         <!-- Comentários -->
          <div class="col-md-12 review">
            <div class="row">
              <div class="col-md-1">
                <div class="profile-img-container review-image" style="background-image: url('<?=$BASE_URL ?>img/users/user.png');"></div>
                <div class="col-md-9 author-details-container">
                  <h4 class="author-name">
                    <a href="<?= $movie->id ?>">David Teste</a>
                  </h4>
                  <p class="fas fa-star"> 9 </p>
                </div>
                <div class="col-md-12">
                  <p class="comment-title">Comentário:</p>
                  <p>Este é o comentário do usuário</p>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>

  <?php

  require_once("templates/footer.php");

  ?>
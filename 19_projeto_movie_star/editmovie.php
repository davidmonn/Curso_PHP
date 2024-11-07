<?php
    require_once("templates/header.php");

    // Verifica se o usuario esta autenticado
    require_once("models/User.php");
    require_once("dao/UserDAO.php");
    require_once("dao/MovieDAO.php");
  
    $user = new User();
    $userDao = new UserDao($conn, $BASE_URL);
    $movieDao = new MovieDAO($conn, $BASE_URL);
  
    $userData = $userDao->verifyToken(true);

    $userMovies = $movieDao->getMoviesByUserId($userData->id);

?>

   <h1> EDIT MOVIE.PHP</h1>

<?php
    require_once("templates/footer.php");
?>
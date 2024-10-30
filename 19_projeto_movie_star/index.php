<?php
    require_once("templates/header.php");

    require_once("dao/MovieDAO.php");
    
    // DAO dos filmes
    $movieDao = new MovieDAO($conn, $BASE_URL);

    $latestMovies = $movieDao->getLatestMovies();

    $actionMovies = [];

    $animationMovies = [];
?>

    <div id="main-container" class="container-fluid">
        <h2 class="section-title">Filmes novos</h2>
        <p class="section-description">Veja as criticas dos ultimos filmes adicionados no MovieStar</p>
        <div class="movies-container">
            <?php foreach($latestMovies as $movie): ?>
                <?php require("templates/movie_card.php"); ?>
            <? endforeach; ?>
        </div>
        <h2 class="section-title">Ação</h2>
        <p class="section-description">Veja os melhores filmes de ação.</p>
        <div class="movies-container"></div>
            
        <h2 class="section-title">Filmes novos</h2>
        <p class="section-description">Veja as melhores animações.</p>
        <div class="movies-container"></div>
    </div>

<?php
    require_once("templates/footer.php");
?>
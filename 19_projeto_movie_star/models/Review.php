<?php

class Review {

    // Todos os campos de nosso banco de dados, para podermos montar o usuario e fazer as manipulacoes com o bd
    public $id;
    public $rating;
    public $review;
    public $users_id;
    public $movies_id;

}

   interface ReviewDAOInterface {

    public function buildReview($data);
    public function create(Review $review);
    public function getMoviesReviews($id); /*Para saber todas as notas e criticas de um filme*/
    public function hasAlreadyReviewed($id, $userId);
    public function getRatings($id);

   }
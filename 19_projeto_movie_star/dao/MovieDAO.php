<?php

   require_once("models/movie.php");
   require_once("models/Message.php");

   // Review DAO

   class MovieDAO implements MovieDAOInterface {

    private $conn;
    private $url;
    private $message;

    public function __construct(PDO $conn, $url) {
        $this->conn = $conn;
        $this->url = $url;
        $this->message = new Message($url);
    }

    public function buildMovie($data) {

        $movie = new Movie();
        $movie->id = $data["id"]; // Iremos receber o array e transformar em objeto.
        $movie->title = $data["title"];
        $movie->description = $data["description"];
        $movie->image = $data["image"];
        $movie->trailer = $data["trailer"];
        $movie->category = $data["category"];
        $movie->length = $data["length"];
        $movie->users_id = $data["users_id"];

        return $movie; // Ira retornar para quem chamar 

    }
    public function findAll(){

    }
    public function getLatestMovies(){

    }
    public function getMoviesByCategory($category) {

    }
    public function getMoviesByUsersId($id){

    }
    public function findById($id){

    }
    public function findByTitle($title){

    }
    public function create($movie){

    }
    public function update($movie){

    }
    public function destroyd($id){

    }

   }
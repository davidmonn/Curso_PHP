<?php

    require_once("models/User.php");

    class UserDAO implements UserDAOInterface{
        public function buildUser($data) {

            private $conn;
            private $url;

            public function __construct(PDO $conn, $url) {
                $this-conn = $conn; // Aqui estamos chamando nossa conexao
                $this->url = $url; // Aqui estamos chamando nossa $BASE_URL
            }

        }
        public function create(User $user, $authUser = false) {
            $user = new User();
            $user->id = $data["id"]; // Iremos receber o array e transformar em objeto.
            $user->name = $data["lastname"];
            $user->email = $data["email"];
            $user->password = $data["password"];
            $user->image = $data["image"];
            $user->bio = $data["bio"];
            $user->token = $data["token"];

            return $user; // Ira retornar para quem chamar 
        }
        public function update(User $user) {

        }
        public function verifyToken($protected = false) {

        }
        public function setTokenToSession($token, $redirect = true) {

        }
        public function authenticateUser($email, $password) {

        }
        public function findByEmail($email) {

        }
        public function findById($id) {

        }
        public function findByToken($token) {

        }
        public function changePassword(User $user) {

        }
    }

?>
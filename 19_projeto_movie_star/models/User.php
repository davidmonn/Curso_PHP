<?php

    class User {

        // Todos os campos de nosso banco de dados, para podermos montar o usuario e fazer as manipulacoes com o bd
        public $id;
        public $name;
        public $lastname;
        public $email;
        public $password;
        public $image;
        public $bio;
        public $token;

        public function generateToken() {
            return bin2hex(random_bytes(50)); // Funcao para retornar uma string e random_bytes outra string que ira nos retornar 50 caracteres
        }

        public function generatePassword($password) {
            return password_hash($password, PASSWORD_DEFAULT);
        }

    }

    interface UserDAOInterface {
        public function buildUser($data);
        public function create(User $user, $authUser = false);
        public function update(User $user, $redirect = true);
        public function verifyToken($protected = false); // False pois iremos poder deixar algumas rotas protegidas, o colocando como false, queremos dizer que conseguimos verificar o usuario mas a rota nao e protegida, entao o redirecionamos caso o usuario nao esteja logado.
        public function setTokenToSession($token, $redirect = true); // Login, com isso iremos redirecionar o usuario para alguma pagina especifica.
        public function authenticateUser($email, $password); // Com esses dois conjuntos e feito a autenticacao completa.
        public function findByEmail($email); // Poderemos encontrar o usuario por email.
        public function findById($id); // Encontrar o usuario pelo id.
        public function findByToken($token); // Receber o token, pode ser encontrado o usuario por seu token
        public function destroyToken();
        public function changePassword(User $user); // Para o usuario poder fazer a troca da senha
    }

?>
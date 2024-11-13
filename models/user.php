<?php

// Inclui o arquivo de conexão que contem a classe Database para gerenciar a conexão com o BD
require_once 'models/database.php';

class User
{
    //Função para encontrar um usuário pelo email
    public static function findByEmail($email){

        // Coleta a conexão com o BD
        $conn = Database::getConnection();

        $stmt = $conn->prepare("SELECT * FROM usuarios WHERE email = :email");
        // executa a consulta com o e-mail pasado como parâmetro
        $stmt->execute(['email' => $email]);

        // Retorna os dados do usuário encontrado como um array associativo
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function find($id){

        $conn = Database::getConnection();
        $stmt = $conn->prepare("SELECT * FROM usuarios WHERE id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Função para criar um novo usuário no banco de dados
    public static function create($data){
        $conn = Database::getConnection();
        $stmt = $conn->prepare("INSERT INTO usuarios (nome, email, senha, perfil) VALUES (:nome, :email, :senha, :perfil)");
        $stmt->execute($data);

    }

    // Função para buscar todos os usuários da base de dados
    public static function all(){
        $conn = Database::getConnection();
        $stmt = $conn->query("SELECT * FROM usuarios");
        // retorna todos os usuários com um array associativo
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    // Função responsável pela atualização dos dados dos usuários na base de dados
    public static function update($id, $data){
        $conn = Database::getConnection();
        // Prepara uma consulta SQL para atualizar, nome, email e perfil com base no ID do usuário
        $stmt = $conn->prepare("UPDATE usuarios SET nome = :nome, email = :email, perfil = :perfil WHERE id = :id");

        $data['id'] = $id;

        $stmt->execute($data);

    }

    // Função para excluir o usuário da base de dados pelo ID
    public static function delete($id){
        $conn = Database::getConnection();
        $stmt = $conn->prepare("DELETE FROM usuarios WHERE id = :id");
        $stmt->execute(['id' => $id]);
    }

}

?>
<?php
// Inclui o arquivo de conexão que contem a classe Database para gerenciar a conexão com o BD
require_once 'models/database.php';

class User
{
    // Função para encontrar um usuário pelo email
    public static function findByEmail($email){
        // Coleta a conexão com o BD
        $conn = Database::getConnection();

        // Quando utiliza um metodo do PDO utilizamos -> 
        $stmt = $conn->prepare("SELECT * FROM usuarios WHERE email = :email");

        // Executa a consulta com e-mail passado como parametro
        $stmt->execute(['email' => $email]);

        // Retorna os dados do usuário encontrado como um array associativo 
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    // Busca todos os usuários pelo id
    static public function find($id){
        $conn = Database::getConnection();
        $stmt = $conn->prepare("SELECT * FROM usuarios WHERE id = :id"); //os : pratica que determina espaço resenvado
        $stmt->execute(['id' => $id]); // Executa o select
        return $stmt->fetch(PDO::FETCH_ASSOC); // Fetch busca uma alteração da última linha 
    }

    // Função para criar um novo usuario no banco de dados se não estiver cadastrado
    // Pode usar o mesmo nome da variavel dentro de cada função diferente 
    static public function create($data){
        $conn = Database::getConnection();
        $stmt = $conn->prepare("INSERT INTO usuarios (nome, email, senha, perfil)  VALUES (:nome, :email, :senha, :perfil)");                                   // VALUES quais valores vão entrar na tabela
        $stmt->execute($data);
    }
    // Função para buscar todos os usuários da base de dados
    public static function all(){
        $conn = Database::getConnection();
        $stmt = $conn->query("SELECT * FROM usuarios");
        // Retorna todos os usuários com um array associativo
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
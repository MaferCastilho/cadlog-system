<?php
class UserController
{
    // Função para registrar um novo usuario
    public function register(){
        // verifica se a requisição HTTP é do tipo POST
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // Coleta dados enviados e armagena em um ARRAY
            $data = [
                'nome' => $_POST['nome'],
                'email' => $_POST['email'],
                'senha' => password_hash($_POST['senha'],PASSWORD_DEFAULT), // Criptografa a senha 
                'perfil' => $_POST['perfil']
            ];
            // Chama o método create do Model User para criar um novo usuário no BD
            User::create($data); // vai pegar tudo que está dentro do Array e subistuir o que tem em user.php
            header('Location: index.php');
        }else{
            include 'views/resgister.php';
        }

    }
}

?>
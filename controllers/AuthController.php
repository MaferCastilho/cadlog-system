<?php
// Chama o que vai estar dentro do user.php
require_once 'models/user.php';

// Classe responsável pela autenticação do usuário
class AuthController
{
    // função responsável pelo processo de login
    public function login(){

        // Verifica se a requicisão HTTP é do tipo POST, ou seja, se o formulario foi enviado
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $email = $_POST['email'];
            $senha = $_POST['senha'];
        }
    }
}

?>
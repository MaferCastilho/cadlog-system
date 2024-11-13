<?php
class DashboardController{
    // Função index, responsável por exibir a página dashboard
    public function index(){
        // Inicia a sessão pra verificar se o usuário está autenticado
        session_start();

        if (!isset($_SESSION['usuario_id'])){
            // redireciona o usuário para a página inicial
            header('Location: index.php');
            exit; //Garante que o script seja interrompido
        }
        //Se o usuário estiver autenticado, inclui a View 'dashboard', que exibe o painel de controle
        include 'views/dashboard.php';
    }
}
?>
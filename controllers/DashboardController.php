<?php
class DashboardControler{
    // Função index, responsável poe exibir a página dashboard
    public function index()
    {
        // Inicia a sessão pra verificar se o usuario está autenticado
        session_start();

        // Verificar se a variavel deste usuario está definida
        if(!isset($_SESSION['usuario_id'])){
            // Redireciona o usuário para a página inicial
            header('Location: index.php');
            exit; // Garante que o script seja interrompido
        }
        // Se o usuário estiver autenticado, inclui a view 'dashboard', que exibe o painel de controle
        include 'views/dashboard.php';
    }
}
?>
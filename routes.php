<?php 
    // inclui arquivos de controlador necessários para lidar com diferentes ações 
    require 'controllers//AuthController.php';       // Instancia controlador de autenticação
    require 'controllers/UserController.php';       // Instancia o controlador de usuário
    require 'controllers/DashboardController.php'; // Instancia o controlador de dashboard

    // Cria instâncias dos controladores para utilizar seus métodos
    $authController = new AuthController();
    $userController = new UserController();
    $dashboardController = new DashboardControler();

// coleta a ação da URL, se não houver ação definida, use 'login' como padrão
$action = $_GET['action'] ?? 'login'; // usa operador de coalescência nula
//(??) para definir 'login' se 'action' não estiver presente

switch ($action){
    case 'login';
        $authController->login();
        break;
    case 'logout';
        $authController->logout();
        break;
    case 'register':
        $userController->register();
        break;
        case 'dashboard';
        $dashboardController->index();
        break;
    default:
    $authController->login();
    break;
}
?>
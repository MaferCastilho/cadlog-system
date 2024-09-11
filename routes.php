<?php 
    // inclui arquivos de controlador necessários para lidar com diferentes ações 
    require 'controllers//AuthController.php';       // Instancia controlador de autenticação
    require 'controllers/UserController.php';       // Instancia o controlador de usuário
    require 'controllers/DashboardController.php'; // Instancia o controlador de dashboard

    // Cria instâncias dos controladores para utilizar seus métodos
    $authController = new AuthController();
    $userController = new UserController();
    $dashboardController = new DashboardControler();


?>
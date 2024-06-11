<?php
session_start(); // Inicia a sessão

// Incluindo o arquivo de configuração do banco de dados
require_once 'config/database.php';

// Incluindo os controladores
require_once 'controller/UserController.php';
require_once 'controller/CarController.php';

// Verificando a requisição do usuário
if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 'home'; // Página padrão
}

// Verifica se o usuário está logado
if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
    $logged_in = true;
} else {
    $logged_in = false;
}

// Roteamento
switch ($page) {
    case 'login':
        if ($logged_in) {
            header("Location: index.php?page=listar_alugueis"); // Redireciona para a lista de aluguéis se já estiver logado
            exit();
        }
        include 'view/login.php';
        break;
    case 'registro':
        if ($logged_in) {
            header("Location: index.php?page=listar_alugueis"); // Redireciona para a lista de aluguéis se já estiver logado
            exit();
        }
        include 'view/registro.php';
        break;
    case 'listar_alugueis':
        if (!$logged_in) {
            header("Location: index.php?page=login"); // Redireciona para o login se não estiver logado
            exit();
        }
        // Obtém os aluguéis do usuário
        $alugueis = $userController->buscarAlugueis($user_id);
        include 'view/listar_alugueis.php';
        break;
    case 'listar_carros':
        if (!$logged_in) {
            header("Location: index.php?page=login"); // Redireciona para o login se não estiver logado
            exit();
        }
        // Obtém os carros disponíveis
        $carros = $carController->listarCarros();
        include 'view/listar_carros.php';
        break;
    case 'logout':
        // Encerra a sessão e redireciona para a página de login
        session_unset();
        session_destroy();
        header("Location: index.php?page=login");
        exit();
        break;
    case 'home':
    default:
        include 'routes.php'; // Inclui o arquivo routes.php para lidar com a página inicial
        break;
}
?>

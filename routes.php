<?php
// Verifica qual página deve ser carregada
if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 'home'; // Página padrão
}

// Inclui os cabeçalhos e rodapé padrão
include 'view/partials/header.php';

// Carrega a página solicitada
switch ($page) {
    case 'home':
        include 'view/home.php';
        break;
    case 'listar_alugueis':
        include 'view/listar_alugueis.php';
        break;
    case 'listar_carros':
        include 'view/listar_carros.php';
        break;
    case 'login':
        include 'view/login.php';
        break;
    case 'registro':
        include 'view/registro.php';
        break;
    default:
        include 'view/404.php'; // Página de erro 404
}

// Inclui o rodapé padrão
include 'view/partials/footer.php';

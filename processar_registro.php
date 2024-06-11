<?php
session_start();

// Inclua o arquivo de configuração do banco de dados e o controlador do usuário
require_once 'config/database.php';
require_once 'controller/UserController.php';

// Verifique se os dados do formulário foram enviados
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtenha os dados do formulário
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Crie uma instância do controlador do usuário
    $userController = new UserController($userModel);

    // Registre o usuário
    $registrado = $userController->registrarUsuario($username, $email, $password);

    // Verifique se o usuário foi registrado com sucesso
    if ($registrado) {
        // Redirecione para a página de login ou para a página inicial
        header("Location: index.php?page=login");
        exit();
    } else {
        // Caso contrário, exiba uma mensagem de erro
        echo "Ocorreu um erro ao registrar o usuário.";
    }
}

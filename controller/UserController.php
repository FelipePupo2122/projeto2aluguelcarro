<?php

// Inclua o arquivo do modelo User
require_once 'model/User.php';

class UserController {
    private $userModel;

    public function __construct() {
        // Instancia o modelo User
        $this->userModel = new User();
    }

    public function registrarUsuario($username, $email, $password) {
        // Verifica se o usuário já existe com o mesmo email
        $existingUser = $this->userModel->buscarUsuarioPorEmail($email);
        if ($existingUser) {
            // Se o usuário já existe, retorne uma mensagem de erro
            return "Este email já está em uso. Por favor, escolha outro.";
        } else {
            // Se o usuário não existe, registre-o
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            $success = $this->userModel->cadastrarUsuario($username, $email, $hashedPassword);
            if ($success) {
                // Se o registro for bem-sucedido, redirecione para a página de login
                header("Location: index.php?page=login");
                exit();
            } else {
                // Se ocorrer algum erro durante o registro, retorne uma mensagem de erro
                return "Ocorreu um erro durante o registro. Por favor, tente novamente.";
            }
        }
    }

    // Outros métodos do controlador...
}

?>

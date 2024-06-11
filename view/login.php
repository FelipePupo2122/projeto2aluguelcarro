<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Login - Aluguel de Carros</title>
</head>

<body>
    <?php include 'partials/header.php'; ?>
    <div class="container">
        <h2>Login</h2>
        <form action="processar_login.php" method="POST">
            <label for="username">Usuário:</label><br>
            <input type="text" id="username" name="username"><br>
            <label for="password">Senha:</label><br>
            <input type="password" id="password" name="password"><br>
            <button type="submit">Login</button>
        </form>
    </div>
</body>

</html>
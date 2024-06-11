<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - Aluguel de Carros</title>
</head>

<body>
    <h2>Registro</h2>
    <form action="processar_registro.php" method="POST">
        <label for="username">Nome:</label><br>
        <input type="text" id="username" name="username" required><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br>
        <label for="password">Senha:</label><br>
        <input type="password" id="password" name="password" required><br>
        <button type="submit">Registrar</button>
    </form>
</body>

</html>
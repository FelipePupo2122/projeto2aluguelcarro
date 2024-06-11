<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Meus Aluguéis - Aluguel de Carros</title>
</head>

<body>
    <?php include 'partials/header.php'; ?>
    <div class="container">
        <h2>Meus Aluguéis</h2>
        <ul>
            <?php
            foreach ($alugueis as $aluguel) {
                echo "<li>Carro: " . $aluguel['carro'] . ", Data de Início: " . $aluguel['data_inicio'] . ", Data de Término: " . $aluguel['data_fim'] . "</li>";
            }
            ?>
        </ul>
    </div>
</body>

</html>
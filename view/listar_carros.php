<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Carros Disponíveis - Aluguel de Carros</title>
</head>

<body>
    <?php include 'partials/header.php'; ?>
    <div class="container">
        <h2>Carros Disponíveis</h2>
        <ul>
            <?php
            foreach ($carros as $carro) {
                echo "<li><img src='" . $carro['imagem'] . "' alt='" . $carro['nome'] . "'><br>" . $carro['nome'] . "</li>";
            }
            ?>
        </ul>
    </div>
</body>

</html>
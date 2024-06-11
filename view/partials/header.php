<nav>
    <ul>
        <li><a href="index.php?page=home">Home</a></li>
        <li><a href="index.php?page=listar_carros">Ver Carros Disponíveis</a></li>
        <?php if (isset($_SESSION['user_id'])) : ?>
            <li><a href="index.php?page=listar_alugueis">Meus Aluguéis</a></li>
            <li><a href="index.php?page=logout">Logout</a></li>
        <?php else : ?>
            <li><a href="index.php?page=login">Login</a></li>
            <li><a href="index.php?page=registro">Registrar</a></li>
        <?php endif; ?>
    </ul>
</nav>
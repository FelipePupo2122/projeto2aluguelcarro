<?php
$servername = "localhost"; // ou o endereço do seu servidor de banco de dados
$username = "root"; // seu usuário do banco de dados
$password = "positivo"; // sua senha do banco de dados
$dbname = "aluguel_carros"; // nome do banco de dados

try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

<?php

$host = 'localhost';      // O servidor onde o banco de dados está
$dbname = 'seu_banco';    // Nome do banco de dados
$username = 'seu_usuario';// Seu nome de usuário do banco de dados
$password = 'sua_senha';  // Sua senha do banco de dados

try {
    $conn = new PDO("mysql:host=$host;=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erro ao conectar ao banco de dados: " . $e->getMessage();
}
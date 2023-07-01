<?php
// Configurações do banco de dados
$host = "localhost";  // substitua pelo endereço do seu servidor de banco de dados
$dbname = "030";  // substitua pelo nome do seu banco de dados
$usuario = "root";  // substitua pelo nome de usuário do banco de dados
$senha = "";  // substitua pela senha do banco de dados

// Conexão com o banco de dados
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $usuario, $senha);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Erro ao conectar com o banco de dados: " . $e->getMessage());
}
?>

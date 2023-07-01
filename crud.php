<?php
include("conecta.php");
$nome = $_POST["nome"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];
$nome_antigo = $_POST["nome_antigo"];

if(isset($_POST["enviar"]))
{
    $comando = $pdo->prepare("INSERT INTO cadastro (nome, email, telefone) VALUES (?, ?, ?)");
    $resultado = $comando->execute([$nome, $email, $telefone]);
    // Para voltar ao formulário:
    header("Location: index.html");
}

if(isset($_POST["excluir"]))
{
    $comando = $pdo->prepare("DELETE FROM cadastro WHERE email = ? and nome = ? and telefone = ?");
    $resultado = $comando->execute([$email, $nome, $telefone]);
    header("Location: index.html");
}

if(isset($_POST["editar"]))
{
    $comando = $pdo->prepare("UPDATE cadastro SET nome = ?, email = ?, telefone = ? WHERE nome = ?");
    $resultado = $comando->execute([$nome, $email, $telefone, $nome_antigo]);
    header("Location: editar.html");
}
?>
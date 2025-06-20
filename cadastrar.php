<?php
include_once "conexao.php";
session_start();

$pdo = conectar();

$nome = trim($_POST['nome']);
$email = trim($_POST['email']);
$senha = trim($_POST['senha']);

$senhaCriptografada = password_hash($senha, PASSWORD_DEFAULT);

try {
    $verifica = $pdo->prepare("SELECT * FROM usuarios WHERE email = ?");
    $verifica->execute([$email]);

    if ($verifica->rowCount() > 0) {
        $_SESSION['mensagemErro'] = "Este e-mail já está cadastrado!";
        header("Location: cadastro.php");
        exit;
    }

    
    $sql = "INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$nome, $email, $senhaCriptografada]);

    $_SESSION['mensagemSucesso'] = "Cadastro realizado com sucesso!";
    header("Location: cadastro.php");
    exit;
} catch (PDOException $e) {
    $_SESSION['mensagemErro'] = "Erro ao cadastrar: " . $e->getMessage();
    header("Location: cadastro.php");
    exit;
}


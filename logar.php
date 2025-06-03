<?php
include_once "conexao.php";
session_start();

$pdo = conectar();

if (isset($_POST['email'], $_POST['senha'])) {
    $email = trim($_POST['email']);
    $senha = trim($_POST['senha']);

    if(empty($email)){
        $_SESSION['mensagemErro'] = "Preencha seu email!";
        header("Location: index.php");
        exit;
    } 
    
    if(empty($senha)){
        $_SESSION['mensagemErro'] = "Preencha sua senha!";
        header("Location: index.php");
        exit;
    }

    $sql = "SELECT * FROM usuarios WHERE email = :email";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':email' => $email]);
    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

    if($usuario && password_verify($senha, $usuario['senha'])){
        $_SESSION['usuario'] = $usuario['id'];
        header("Location: dashboard.php");
        exit;

    } else{
        header("Location: index.php?erro=1");
        exit;
    }
    
}
?>

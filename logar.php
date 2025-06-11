<?php
include_once "conexao.php";
session_start();

$pdo = conectar();

if (isset($_POST['email'], $_POST['senha'])) {
    $email = trim($_POST['email']);
    $senha = trim($_POST['senha']);
}

    $sql = "SELECT * FROM usuarios WHERE email = :email";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':email' => $email]);
    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($usuario){
        if(password_verify($senha, $usuario['senha'])){
            $_SESSION['usuario'] = $usuario['id'];
            header("Location: dashboard.php");
            exit;
        } else {
            header("Location: index.php?erro=1");
            exit;
        }
        
    } else {
            header("Location: index.php?erro=2");
            exit;
    }

?>

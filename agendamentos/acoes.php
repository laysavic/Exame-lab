<?php

session_start();
include "../conexao.php";

if (isset($_POST['create_usuario'])){
    $nome = trim($_POST['nome']);
    $email = trim($_POST['email']);
    $data_nascimento = trim($_POST['data-nasc']);
    $senha = isset($POST['senha']) ?, trim($_POST['senha']);

    $sql = "INSERT INTO agendamentos()"
}

?>
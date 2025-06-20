<?php
include_once "conexao.php";
$pdo = conectar();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $pdo->prepare("DELETE FROM agendamentos WHERE id = ?");
    $stmt->execute([$id]);
}

header("Location: listar_agendamentos.php");

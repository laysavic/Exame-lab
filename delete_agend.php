<?php
include_once 'conexao.php';
$conn = conectar();

$id = $_GET['id'] ?? null;

if ($id) {
    $stmt = $conn->prepare("DELETE FROM agendamentos WHERE id = ?");
    $stmt->execute([$id]);
}

header("Location: agendamentos.php");
exit;

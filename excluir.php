<?php
include_once 'conexao.php';
$conn = conectar();

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    echo "ID inválido para exclusão.";
    exit;
}

$id = (int) $_GET['id'];

$sql = "DELETE FROM pacientes WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->execute([$id]);

header("Location: register.php");
exit;

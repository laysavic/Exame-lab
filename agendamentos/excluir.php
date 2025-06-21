<?php
include '../conexao.php';

$id = $_GET['id'];
$sql = "DELETE FROM agendamentos WHERE id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$id]);

header("Location: listar.php");

<?php
include_once 'conexao.php';
$conn = conectar();

$tipo = $_POST['tipo'] ?? null;
$nome = $_POST['nome'] ?? '';
$email = $_POST['email'] ?? '';
$cpf = $_POST['cpf'] ?? '';
$data_nascimento = $_POST['data_nascimento'] ?? '';
$endereco = $_POST['endereco'] ?? '';
$telefone = $_POST['telefone'] ?? '';

if ($tipo === 'novo') {
    $sql = "INSERT INTO pacientes (nome, email, cpf, data_nascimento, endereco, telefone)
            VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$nome, $email, $cpf, $data_nascimento, $endereco, $telefone]);

} elseif ($tipo === 'editar') {
    $id = $_POST['id'] ?? null;

    if (!$id || !is_numeric($id)) {
        echo "ID inválido para edição.";
        exit;
    }

    $sql = "UPDATE pacientes SET nome = ?, email = ?, cpf = ?, data_nascimento = ?, endereco = ?, telefone = ?
            WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$nome, $email, $cpf, $data_nascimento, $endereco, $telefone, $id]);
}

header("Location: register.php");
exit;

<?php
include_once 'conexao.php';
$conn = conectar();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $data_nascimento = $_POST['data_nascimento'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];

    $sql = "INSERT INTO pacientes (nome, email, cpf, data_nascimento, endereco, telefone)
            VALUES (:nome, :email, :cpf, :data_nascimento, :endereco, :telefone)";
    
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':cpf', $cpf);
    $stmt->bindParam(':data_nascimento', $data_nascimento);
    $stmt->bindParam(':endereco', $endereco);
    $stmt->bindParam(':telefone', $telefone);

    if ($stmt->execute()) {
        header("Location: register.php");
        exit();
    } else {
        echo "Erro ao adicionar paciente.";
    }
}
?>

<link rel="stylesheet" href="style.css">

<h2>Adicionar Paciente</h2>
<form method="POST" action="adicionar.php">
    <label>Nome:</label><br>
    <input type="text" name="nome" required>

    <label>Email:</label><br>
    <input type="email" name="email" required>

    <label>CPF:</label><br>
    <input type="text" name="cpf" maxlength="14" required>

    <label>Data de Nascimento:</label><br>
    <input type="date" name="data_nascimento" required>

    <label>Endereço:</label><br>
    <input type="text" name="endereco" maxlength="244" required>

    <label>Telefone:</label><br>
    <input type="text" name="telefone" required>

    <button type="submit" class="salvar">Salvar</button>
</form>


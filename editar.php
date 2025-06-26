<?php
include_once 'conexao.php';
$conn = conectar();

if (!isset($_GET['id']) || empty($_GET['id'])) {
    echo "ID do paciente não informado.";
    exit;
}

$id = $_GET['id'];

$sql = "SELECT * FROM pacientes WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->execute([$id]);
$paciente = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$paciente) {
    echo "Paciente não encontrado.";
    exit;
}
?>

<link rel="stylesheet" href="style.css">
<body class="fundo">
    
<h1>Editar Paciente</h1>
<a href="dashboard.php" class="inicio">⬅️Início</a>
<form class="form-pacientes"  method="POST" action="salvar.php">
    <input type="hidden" name="tipo" value="editar">
    <input type="hidden" name="id" value="<?= $paciente['id'] ?>">

    <label>Nome:</label><br>
    <input type="text" name="nome" value="<?= $paciente['nome'] ?>" required>

    <label>Email:</label><br>
    <input type="email" name="email" value="<?= $paciente['email'] ?>" class="email" required>

    <label>CPF:</label><br>
    <input type="text" name="cpf" value="<?= $paciente['cpf'] ?>"  required>

    <label>Data de Nascimento:</label><br>
    <input type="date" name="data_nascimento" value="<?= $paciente['data_nascimento'] ?>"  required>

    <label>Endereço:</label><br>
    <input type="text" name="endereco" value="<?= $paciente['endereco'] ?>"  required>

    <label>Telefone:</label><br>
    <input type="text" name="telefone" value="<?= $paciente['telefone'] ?>"  required>

    <button type="submit" class="salvar">Salvar Alterações</button>
</form>
</body>

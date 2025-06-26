<?php
include_once 'conexao.php';
$conn = conectar();

if (!isset($_GET['id']) || empty($_GET['id'])) {
    echo "ID inválido.";
    exit;
}

$id = $_GET['id'];

$stmt = $conn->prepare("SELECT * FROM agendamentos WHERE id = ?");
$stmt->execute([$id]);
$agendamento = $stmt->fetch(PDO::FETCH_ASSOC);

$id_pacientes = $conn->query("SELECT id, nome FROM pacientes");
?>
<link rel="stylesheet" href="style.css">
<body class="fundo">
<a href="dashboard.php" class="inicio">⬅️Início</a>    
<h2 class="title">Editar Agendamento</h2>
<form class="form-agenda" method="POST" action="atualizar.php">
    
    <input type="hidden" name="tipo" value="editar">
    <input type="hidden" name="id" value="<?= $agendamento['id'] ?>">

    <label>Paciente:</label><br>
    <select name="id_paciente" required>
        <?php while ($p = $id_pacientes->fetch(PDO::FETCH_ASSOC)) { ?>
            <option value="<?= $p['id'] ?>" <?= ($p['id'] == $agendamento['id_paciente']) ? 'selected' : '' ?>>
                <?= $p['nome'] ?>
            </option>
        <?php } ?>
    </select><br><br>

    <label>Tipo de Exame:</label><br>
    <input type="text" name="tipo_exame" value="<?= $agendamento['tipo_exame'] ?>" required>

    <label>Data:</label><br>
    <input type="date" name="data_exame" value="<?= $agendamento['data_exame'] ?>" required>

    <label>Hora:</label><br>
    <input type="time" name="hora_exame" value="<?= $agendamento['hora_exame'] ?>" required>

    <label>Status:</label><br>
    <select name="status">
        <option value="Pendente" <?= $agendamento['status'] == 'Pendente' ? 'selected' : '' ?>>Pendente</option>
        <option value="Confirmado" <?= $agendamento['status'] == 'Confirmado' ? 'selected' : '' ?>>Confirmado</option>
        <option value="Cancelado" <?= $agendamento['status'] == 'Cancelado' ? 'selected' : '' ?>>Cancelado</option>
    </select><br><br>

    <button type="submit" class="salvar">Salvar Alterações</button>
</form>
</body>
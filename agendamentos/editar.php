<?php
include '../conexao.php';
$id = $_GET['id'];

$sql = "SELECT * FROM agendamentos WHERE id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$id]);
$agendamento = $stmt->fetch();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sql = "UPDATE agendamentos SET nome_paciente=?, exame=?, data=?, horario=?, clinica=? WHERE id=?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        $_POST['nome_paciente'],
        $_POST['exame'],
        $_POST['data'],
        $_POST['horario'],
        $_POST['clinica'],
        $id
    ]);
    header("Location: listar.php");
}
?>

<h2>Editar Agendamento</h2>
<form method="POST">
    <label>Paciente:</label>
    <input type="text" name="nome_paciente" value="<?= $agendamento['nome_paciente'] ?>" required><br>

    <label>Exame:</label>
    <input type="text" name="exame" value="<?= $agendamento['exame'] ?>" required><br>

    <label>Data:</label>
    <input type="date" name="data" value="<?= $agendamento['data'] ?>" required><br>

    <label>Horário:</label>
    <input type="time" name="horario" value="<?= $agendamento['horario'] ?>" required><br>

    <label>Clínica:</label>
    <input type="text" name="clinica" value="<?= $agendamento['clinica'] ?>" required><br>

    <button type="submit">Salvar</button>
</form>

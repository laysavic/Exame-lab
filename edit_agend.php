<?php
include_once "conexao.php";
$pdo = conectar();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $pdo->prepare("SELECT * FROM agendamentos WHERE id = ?");
    $stmt->execute([$id]);
    $agendamento = $stmt->fetch();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $exame = $_POST["exame"];
    $data = $_POST["data"];
    $hora = $_POST["hora"];

    $sql = "UPDATE agendamentos SET nome_paciente=?, tipo_exame=?, data_exame=?, hora_exame=?, observacoes=? WHERE id=?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$nome, $exame, $data, $hora, $_POST["id"]]);

    header("Location: listar_agendamentos.php");
}
?>

<h2>Editar Agendamento</h2>
<form method="POST" action="">
    <input type="hidden" name="id" value="<?= $agendamento['id'] ?>">

    <label>Nome do Paciente:</label><br>
    <input type="text" name="nome" value="<?= $agendamento['nome_paciente'] ?>" required><br><br>

    <label>Tipo de Exame:</label><br>
    <input type="text" name="exame" value="<?= $agendamento['tipo_exame'] ?>" required><br><br>

    <label>Data:</label><br>
    <input type="date" name="data" value="<?= $agendamento['data_exame'] ?>" required><br><br>

    <label>Hora:</label><br>
    <input type="time" name="hora" value="<?= $agendamento['hora_exame'] ?>" required><br><br>

    <button type="submit">Salvar</button>
</form>

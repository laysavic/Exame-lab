<?php
include_once "conexao.php";
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $exame = $_POST["exame"];
    $data = $_POST["data"];
    $hora = $_POST["hora"];

    try {
        $pdo = conectar();
        $sql = "INSERT INTO agendamentos (nome_paciente, tipo_exame, data_exame, hora_exame, observacoes)
                VALUES (?, ?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$nome, $exame, $data, $hora,]);

        header("Location: listar_agendamentos.php");
    } catch (PDOException $e) {
        echo "Erro ao agendar: " . $e->getMessage();
    }
}
?>

<h2>Agendar Exame</h2>
<form method="POST" action="">
    <label>Nome do Paciente:</label><br>
    <input type="text" name="nome" required><br><br>

    <label>Tipo de Exame:</label><br>
    <input type="text" name="exame" required><br><br>

    <label>Data do Exame:</label><br>
    <input type="date" name="data" required><br><br>

    <label>Hora do Exame:</label><br>
    <input type="time" name="hora" required><br><br>

    <button type="submit">Agendar</button>
</form>

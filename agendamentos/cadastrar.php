<?php include '../conexao.php'; ?>
<link rel="stylesheet" href="style.css">

<h2>Novo Agendamento</h2>
<form method="POST">
    <label>ID do Paciente (id_usuario):</label>
    <input type="number" name="id_usuario" required><br>

    <label>ID da Clínica (id_clinica):</label>
    <input type="number" name="id_clinica" required><br>

    <label>Tipo de Exame:</label>
    <input type="text" name="tipo_exame" required><br>

    <label>Data do Exame:</label>
    <input type="date" name="data_exame" required><br>

    <label>Hora do Exame:</label>
    <input type="time" name="hora_exame" required><br>

    <button type="submit">Agendar</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sql = "INSERT INTO agendamentos (id_usuario, id_clinica, tipo_exame, data_exame, hora_exame)
            VALUES (?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        $_POST['id_usuario'],
        $_POST['id_clinica'],
        $_POST['tipo_exame'],
        $_POST['data_exame'],
        $_POST['hora_exame']
    ]);
    header("Location: listar.php");
}
?>

<?php
include_once 'conexao.php';
$conn = conectar();

$pacientes = $conn->query("SELECT id, nome FROM pacientes");
?>

<link rel="stylesheet" href="style.css">

<body class="fundo">

<a href="dashboard.php" class="inicio">⬅️Início</a>
<h2 class="title">Novo Agendamento</h2>
<form class= "form-agenda" method="POST" action="salve_agend.php">

    <label>Paciente:</label>
    <select name="id_paciente" required>
        <option value="">Selecione</option>
        <?php while ($p = $pacientes->fetch(PDO::FETCH_ASSOC)) { ?>
            <option value="<?= $p['id'] ?>"><?= $p['nome'] ?></option>
        <?php } ?>
    </select>

    <label>Tipo de Exame:</label>
    <input type="text" name="tipo_exame" required>

    <label>Data:</label>
    <input type="date" name="data_exame" required>

    <label>Hora:</label>
    <input type="time" name="hora_exame" required>

    <label>Status:</label>
    <select name="status">
        <option value="Pendente" >Pendente</option>
        <option value="Confirmado">Confirmado</option>
        <option value="Cancelado">Cancelado</option>
    </select>

    <button type="submit" class="salvar">Salvar</button>
</form>
</body>

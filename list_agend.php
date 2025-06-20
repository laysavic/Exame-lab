<?php
include_once "conexao.php";
$pdo = conectar();

$sql = "SELECT * FROM agendamentos ORDER BY data_exame, hora_exame";
$stmt = $pdo->query($sql);
$agendamentos = $stmt->fetchAll();
?>

<h2>Agendamentos</h2>
<a href="agendar.php">Novo Agendamento</a><br><br>

<table border="1" cellpadding="5">
    <tr>
        <th>Paciente</th>
        <th>Exame</th>
        <th>Data</th>
        <th>Hora</th>
        <th>Ações</th>
    </tr>
    <?php foreach ($agendamentos as $a): ?>
    <tr>
        <td><?= $a['nome_paciente'] ?></td>
        <td><?= $a['tipo_exame'] ?></td>
        <td><?= $a['data_exame'] ?></td>
        <td><?= $a['hora_exame'] ?></td>
        <td>
            <a href="editar_agendamento.php?id=<?= $a['id'] ?>">Editar</a> |
            <a href="excluir_agendamento.php?id=<?= $a['id'] ?>" onclick="return confirm('Tem certeza?')">Excluir</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

<?php include '../conexao.php'; ?>
<link rel="stylesheet" href="..style.css">

<h2>Agendamentos</h2>
<a class="botao" href="cadastrar.php">➕ Novo Agendamento</a>

<table>
    <tr>
        <th>ID Paciente</th>
        <th>ID Clínica</th>
        <th>Tipo Exame</th>
        <th>Data</th>
        <th>Hora</th>
        <th>Ações</th>
    </tr>
    <?php
    $sql = "SELECT * FROM agendamentos";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $agendamentos = $stmt->fetchAll();

    foreach ($agendamentos as $agenda) {
        echo "<tr>";
        echo "<td>{$agenda['id_usuario']}</td>";
        echo "<td>{$agenda['id_clinica']}</td>";
        echo "<td>{$agenda['tipo_exame']}</td>";
        echo "<td>{$agenda['data_exame']}</td>";
        echo "<td>{$agenda['hora_exame']}</td>";
        echo "<td>
                <a href='editar.php?id={$agenda['id']}'>✏️</a> 
                <a href='excluir.php?id={$agenda['id']}'>🗑️</a>
              </td>";
        echo "</tr>";
    }
    ?>
</table>

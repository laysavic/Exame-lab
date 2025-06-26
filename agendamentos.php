<?php
include_once 'conexao.php';
$conn = conectar();

$sql = "SELECT ag.*, p.nome AS nome_paciente 
        FROM agendamentos ag 
        JOIN pacientes p ON ag.id_paciente = p.id";
$resultado = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamentos Exame lab</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h2 class="title">Agendamentos</h2>
<a href="add_agend.php" class="btn-add" >+ Novo Agendamento</a>

<table border="1" class="pacientes-table">
    <tr>
        <th>ID</th>
        <th>Paciente</th>
        <th>Exame</th>
        <th>Data</th>
        <th>Hora</th>
        <th>Status</th>
        <th>Ações</th>
    </tr>

    <?php while ($ag = $resultado->fetch(PDO::FETCH_ASSOC)) { ?>
    <tr>
        <td><?= $ag['id'] ?></td>
        <td><?= $ag['nome_paciente'] ?></td>
        <td><?= $ag['tipo_exame'] ?></td>
        <td><?= date('d/m/Y', strtotime($ag['data_exame'])) ?></td>
        <td><?= substr($ag['hora_exame'], 0, 5) ?></td>
        <td><?= $ag['status'] ?></td>
        <td>
            <a href="edt_agend.php?id=<?= $ag['id'] ?>"  class="btn-edit">Editar</a> 
            <a href="delete_agend.php?id=<?= $ag['id'] ?>" onclick="return confirm('Confirmar exclusão?')"class="btn-delete">Excluir</a>
        </td>
    </tr>
    <?php } ?>
</table>
    
</body>
</html>
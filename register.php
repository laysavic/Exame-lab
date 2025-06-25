<?php
include_once 'conexao.php';
$conn = conectar();

$sql = "SELECT * FROM pacientes";
$resultado = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pacientes Exame-lab</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="body-pacientes" >
    
<h2 class=title>Pacientes</h2>

<a href="adicionar.php" class="btn-add">+ Adicionar Paciente</a>

<table border="1" class="pacientes-table">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
        <th>CPF</th>
        <th>Data Nascimento</th>
        <th>Endereço</th>
        <th>Telefone</th>
        <th>Ações</th>
    </tr>

    <?php while ($paciente = $resultado->fetch(PDO::FETCH_ASSOC)) { ?>
    <tr>
        <td><?= $paciente['id'] ?></td>
        <td><?= $paciente['nome'] ?></td>
        <td><?= $paciente['email'] ?></td>
        <td><?= $paciente['cpf'] ?></td>
        <td><?= date('d/m/Y', strtotime($paciente['data_nascimento'])) ?></td>
        <td><?= $paciente['endereco'] ?></td>
        <td><?= $paciente['telefone'] ?></td>

        <td>
            <a href="editar.php?id=<?= $paciente['id'] ?>"  class="btn-edit" >Editar</a>
            <a href="excluir.php?id=<?= $paciente['id'] ?>" onclick="return confirm('Tem certeza?')" class="btn-delete">Excluir</a>
        </td>

    </tr>
    <?php } ?>
</table>

</body>
</html>


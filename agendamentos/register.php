<?php
include "../conexao.php"
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Exame-lab</title>
    <link rel="stylesheet" href="../style.css">

</head>
<body>
    <div class="layout">
        <aside class="sidebar">
            <h2 class="logo">Exame Lab</h2>
            <nav>
                <a href="#" class="nav-item active">📊 Dashboard</a>
                <a href="#" class="nav-item">👤 Pacientes</a>
                <a href="#" class="nav-item">📅 Agendamentos</a>
                <a href="#" class="nav-item">⚙️ Configurações</a>
            </nav>
        </aside>

        <main class="main-content">
            <div class="header">
                <h1>Pacientes</h1>
                <button class="logout-btn">Sair</button>
            </div>

<? php include('navbar.php'); ?>
<div class="container mt-4">
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
<h4> Lista de Usuários
<a href="new-user.php" class="btn btn-primary float-end">Adicionar usuário</a>
</h4>
</div>
<div class="card-body">
<table class="table table-bordered table-striped">
<thead>
<tr>
<th>ID</th>
<th>Nome</th>
<th>Email</th>
<th>Data Nascimento</th>
<th>Ações</th>

</tr>

</thead>

<tbody>


<tr>
<td>1</td>
<td>teste</td>
<td>teste@gmail.com</td>
<td>01/01/2010</td>
<td>
<a href="" class="btn btn-secondary btn-sm">Visualizar</a>
<a href="" class="btn btn-success btn-sm">Editar</a>
<form action="" method="POST" class="d-inline">
<button type="submit" name="delete_usuario" value="1" class="btn btn-danger btn-sm">
Excluir
</button>
</form>
</td>
</tr>
</tbody>
</table>
</div>
</body>
</html>
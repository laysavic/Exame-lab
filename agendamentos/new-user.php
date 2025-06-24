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

<? php include('navbar.php'); ?>
<div class="container mt-5">
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
<h4> Adicionar usuário
<a href="register.php" class="btn btn-danger float-end">Voltar</a>
</h4>
</div>
    <div class="card-body" >
        <form action="acoes.php" method="POST">
            <div class="mb-3">
                <label>Nome</label>
                <input type="text" name="nome" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Email</label>
                <input type="email" name=""nome class="form-control" required>
            </div>
             <div class="mb-3">
                <label>Data de Nascimento</label>
                <input type="date" name="data-nasc" class="form-control" required>
            </div>
             <div class="mb-3">
                <label>Senha</label>
            <input type="password" name="senha" class="form-control" required>
            </div>
             <div class="mb-3">
            
                <button type="submit" name="create_usuario" class="btn btn-primary">Salvar</button>
            </div>

        </form>
    </div>
</body>
</html>
<?php
include_once "security.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Exame Lab - DSHB</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!--  <div class="container02">
        <h1>Bem-Vindo(a) a Exame lab!</h1>
        <p>Você logou com sucesso.</p>
        <a href="logout.php">Sair</a>

    </div> -->

<div class="top-bar">
  
  <nav>
    <img src="img/logo.png" alt="">
    <a href="list_agend.php">Agendamentos</a>
    <a href="cadastro.php">Cadastre-se</a>
    <a href="index.php" class="login-btn">Login</a>
  </nav>
</div>

<div class="container">
  <aside class="sidebar">
    <div class="user">
      <i class="fa fa-user-circle"></i> Usuário
    </div>
    <a href="list_agend.php">📅 Agendamentos</a>
  </aside>

  <main class="content">
    <div class="exame-select">
      <button>Tipo do exame</button>
    </div>

    <div class="calendar">
      
      <input type="date" />
    </div>

    <button class="confirmar-btn">CONFIRMAR</button>
  </main>
</div>

</body>
</html>
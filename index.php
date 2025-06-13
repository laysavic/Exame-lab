<?php
 session_start();?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exame Lab</title>
    <link rel="stylesheet" href="style.css">
    
</head>

<body>
 <?php
 
if (isset($_SESSION['mensagemErro'])) {
    echo "<div class='style'>" . $_SESSION['mensagemErro'] . "</div>";
    unset($_SESSION['mensagemErro']);
}


if (isset($_GET['erro']) && $_GET['erro'] == 1) {
    echo"<div class= 'style' >
            <strong>Erro:</strong> Email ou senha incorretos.
          </div>";
  }

if (isset($_GET['erro']) && $_GET['erro'] == 2) {
        echo "<div class= 'style'> 
                  <p class='mensagem-erro'>Essa conta não existe, faça login novamente.</p>
                </div>";
    }

  ?>
  

<div class="container">
  <div class="left-side">
      <img src="img/logo.png" alt="Exame Lab" class="logo">
    </div>
    <div class="right-side">
      <div class="login-box">
        <img src="img/login.png" alt="" class="user-icon">
        <h2>LOGIN</h2>
        <form class="form" action="logar.php" method="POST">
        <div class="input">
          <label for="email">e-mail:</label>
          <input type="email" id="email" name="email"  placeholder="Ex: usuario@gmail.com"   required>
          
          <label for="senha">senha:</label>
          <input type="password" id="senha" name="senha"  placeholder="Ex: 12345678" required>
          
        </div>


        <div class=" btn" >
            <button type="submit" >ENTRAR</button>
        </div>
            <div class="link-conta">
            <p>Não tem uma conta? <a href="cadastro.php">Cadastre-se</a></p>
        </div>
        </form>
       
      </div>
    </div>
  </div>
  <div class="footer">
    <footer>&copy; Exame Lab 2025</footer>
    
</div>
        
</body>
</html>

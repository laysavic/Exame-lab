<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro-Exame Lab</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
 <?php
 
if (isset($_SESSION['mensagemErro'])) {
    echo "<div class='style'>" . $_SESSION['mensagemErro'] . "</div>";
    unset($_SESSION['mensagemErro']);
}
  ?>
  


    <div class="cadastro">
      <div class="register-box">
        <img src="img/login.png" alt="" class="user-icon">
            <h2>CADASTRO</h2>
                <form class="form" action="cadastrar.php" method="POST">
                    <div class="input-cad">
                        <label for="usuario">usuário:</label>
                        <input type="name" id="usuario" name="usuario"  placeholder="Ex: usuario"   required>
          
                        <label for="email">e-mail:</label>
                        <input type="email" id="email" name="email"  placeholder="Ex: usuario@gmail.com"   required>
          
                        <label for="senha">senha:</label>
                        <input type="password" id="senha" name="senha"  placeholder="Ex: 12345678" required>
          
        </div>
        
        <div class=" btn" >
            <button type="submit" >CADASTRAR</button>
        </div>
        

        <div class="link-conta">
            <p>Já possui uma conta? <a href="index.php">Faça login</a></p>
        </div>
    </div>
         </form>
    </div>
</body>
</html>
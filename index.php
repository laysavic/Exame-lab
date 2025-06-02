<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exame Lab</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="script.js">
</head>

<body>
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

        </form>
       
      </div>
    </div>
  </div>
  <div class="footer">
    <footer>&copy; Exame Lab 2025</footer>
</div>
        
</body>
</html>

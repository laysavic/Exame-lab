<?php

class Usuario{

    public function login($email, $senha){
        global $conexao;

        $sql = $conexao->prepare("SELECT * FROM usuarios WHERE email = :email AND senha = :senha");

        $sql->bindValue("email", $email);
        $sql->bindValue("senha", $senha);
        $sql->execute();

        if($sql->rowCount() > 0){
            $usuario = $sql->fetch(PDO::FETCH_ASSOC);

            if(password_verify($senha, $usuario['senha'])){
                $_SESSION['usuario_id'] = $usuario['id'];
                echo "Login realizado com sucesso!";
            }else  {
                echo "Senha incorreta, verifique sua senha.";
            } 
            
        }
    }

}

?>
<?php


if (isset($_POST['email']) && !empty($_POST['email']) 
&& (isset($_POST['senha']) && !empty($_POST['senha'])))
{

    require 'conexao.php';
    require 'Usuario.php';

    $user = new Usuario();

    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);

    $user->login($email, $senha);
   
}
    else {
            header("location: login.html");
    }
?>
<?php

$localhost = "localhost";
$user = "root";
$password = "";
$banco = "exame-lab";

global $conexao;

try{
    $conexao = new PDO("mysql:dbname=".$banco."; host=" .$localhost, $user, $password);
    $conexao->setAttribute(
    PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "em breve algo aqui";

}catch(PDOException $e) {
    echo "ERRO na conexão ".$e->getMessage();
    exit;

}

?>
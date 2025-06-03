<?php
function conectar(){
    try{
        $pdo = new PDO("mysql:host=localhost;dbname=exame-lab;charset=utf8mb4","root","");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;

    }catch(PDOException $erro){
        echo "Erro na conexão" .$erro->getMessage();
        exit;
    }
}

// $localhost = "localhost";
// $user = "root";
// $password = "";
// $banco = "exame-lab";

// global $conexao;

// try{
//     $conexao = new PDO("mysql:dbname=".$banco."; host=" .$localhost, $user, $password);
//     $conexao->setAttribute(
//     PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//         echo "em breve algo aqui";

// }catch(PDOException $e) {
//     echo "ERRO na conexão ".$e->getMessage();
//     exit;

// }

?>
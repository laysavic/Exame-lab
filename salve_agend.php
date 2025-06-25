<?php
include_once 'conexao.php';
$conn = conectar();

$id_paciente= $_POST['id_paciente'];
$tipo_exame = $_POST['tipo_exame'];
$data = $_POST['data_exame'];
$hora = $_POST['hora_exame'];
$status = $_POST['status'];

$sql = "INSERT INTO agendamentos (id_paciente, tipo_exame, data_exame, hora_exame, status)
            VALUES (?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->execute([$id_paciente, $tipo_exame, $data, $hora, $status]);

header("Location: agendamentos.php");
exit;

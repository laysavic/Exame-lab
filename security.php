<?php
session_start();


if (!isset($_SESSION['usuario'])) {
    header("Location: index.php?erro=2");
    exit();
}

?>
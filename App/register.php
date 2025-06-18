<?php
require_once '../config/connect.php';

$username = $_POST['username'];
$senha = $_POST['senha'];

if (!empty($username) && !empty($senha)) {
    $query = "INSERT INTO usuarios (nome_usuario, senha_usuario) VALUES (?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ss", $username, $senha);
    $stmt->execute();

    session_start();
    $_SESSION['id'] = true;

    header('Location: ../Views/home.php');
    exit();
}
exit();
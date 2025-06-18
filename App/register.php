<?php
require_once '../config/connect.php';

$username = $_POST['username'];
$senha = $_POST['senha'];
$admin = $_POST['admin'];

if (!empty($username) && !empty($senha)) {
    $query = "INSERT INTO usuarios (nome_usuario, senha_usuario) VALUES (?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ss", $username, $senha);
    $stmt->execute();

    session_start();
    $_SESSION['id'] = true;

    if ($admin == 1) {
        $query = "UPDATE usuarios SET is_admin = 1 WHERE nome_usuario = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("s", $username);
        $stmt->execute();

        $_SESSION['admin'] = 1;
    } else {
        $query = "UPDATE usuarios SET is_admin = 0 WHERE nome_usuario = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("s", $username);
        $stmt->execute();

        $_SESSION['admin'] = false;
    }

    header('Location: ../Views/home.php');
    exit();
}
exit();
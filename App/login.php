<?php
require_once '../config/connect.php';

$username = $_POST['username'];
$senha = $_POST['senha'];

if (!empty($username) && !empty($senha)) {
    $query = "SELECT * FROM usuarios WHERE nome_usuario = (?) AND senha_usuario = (?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ss", $username, $senha);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 0) {
        echo "<script>alert('Usuário ou senha incorretos!')</script>";
        echo "<script>window.history.back()</script>";
    } else {
        $result = $result->fetch_assoc();
        session_start();
        $_SESSION['id'] = true;
        
        if ($result['is_admin'] == 1) {
            $_SESSION['admin'] = true;
        } else {
            $_SESSION['admin'] = false;
        }

        header('Location: ../Views/home.php');
        exit();
    }
}
exit();
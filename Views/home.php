<?php
session_start();
if (isset($_SESSION['id'])) {
    if ($_SESSION['admin'] == true) {
        echo "Olá, Admin!\n";
        echo "<a href='usuarios.php'>Usuários</a>";
    } else {
        echo "Olá, Usuário!";
    }
} else {
    header('Location: login_form.php');
    exit();
}
?>

<a href="login_form.php">Login</a>
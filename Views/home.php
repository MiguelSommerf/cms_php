<?php
session_start();
if (isset($_SESSION['id'])) {
    if ($_SESSION['admin'] == true) {
        echo "Olá, Admin!";
    } else {
        echo "Olá, Usuário!";
    }
}
?>

<a href="login_form.php">Login</a>
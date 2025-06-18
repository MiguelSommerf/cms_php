<?php 
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Login</title>
</head>
<body>
    <div class="nav-bar">
        <div class="nav-bar-content">
            <a href="login_form.php">Login</a>
        </div>
    </div>
    <div class="container">
        <h1>Cadastro</h1>
        <form class="form-group" action="../App/register.php" method="post">
            <label>Nome de usuário:</label>
            <input type="text" name="username" placeholder="Digite aqui" required>
            <label>Senha:</label>
            <input type="password" name="senha" placeholder="Digite aqui" required>
            <button type="submit">Entrar</button>
        </form>
    </div>
</body>
</html>
<?php 
session_start();
session_destroy();
?>
<?php if(!isset($_SESSION['id'])): ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
    </head>
    <body>
        <form action="../App/login.php" method="post">
            <label>Nome de usuário:</label>
            <input type="text" name="username" placeholder="Digite aqui" required>
            <label>Senha:</label>
            <input type="password" name="senha" placeholder="Digite aqui" required>
            <button type="submit">Entrar</button>
        </form>
        <a href="register_form.php">Cadastrar</a>
    </body>
    </html>
<?php endif ?>
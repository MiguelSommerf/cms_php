<?php if(!isset($_SESSION['id'])): ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
    </head>
    <body>
        <form action="../App/register.php" method="post">
            <label>Nome de usuário:</label>
            <input type="text" name="username" placeholder="Digite aqui" required>
            <label>Senha:</label>
            <input type="password" name="senha" placeholder="Digite aqui" required>
            <select name="admin">
                <option aria-placeholder="">É Admin?</option>
                <option value="<?php echo true; ?>">Sim</option>
                <option value="<?php echo false; ?>">Não</option>
            </select>
            <button type="submit">Entrar</button>
        </form>
        <a href="login_form.php">Login</a>
    </body>
    </html>
<?php else: ?>
    <?php session_destroy(); ?>
<?php endif ?>
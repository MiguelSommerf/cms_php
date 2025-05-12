<?php
require_once '../config/connect.php';

session_start();
if (!isset($_SESSION['admin']) or $_SESSION['admin'] != true) {
    header('Location: ../Views/home.php');
    exit('Você não tem permissão para acessar esta página.');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <script>
        function deleteFunction() {
            const confirmacao = confirm('Você tem certeza que deseja deletar este usuário?');
            return confirmacao;
        }
    </script>
    <title>Usuários</title>
</head>
<body>
    <div class="nav-bar">
        <div class="nav-bar-content">
            <a href="../Views/home.php">Voltar</a>
        </div>
    </div>
    <div class="container">
        <?php
        $query = "SELECT * FROM usuarios WHERE is_admin = 0";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            echo "<table>";
            echo "<tr><th>Username</th>";
            echo "<th>Deletar</th></tr>";
            foreach ($result as $usuario) {
                echo "<tr><td>" . $usuario['nome_usuario'] . "</td>";
                echo "<td>
                        <form class='ocult' action='../App/deleteUser.php' method='POST'>
                            <input type='hidden' name='id_usuario' value='" . $usuario['id_usuario'] . "'>
                            <button class='btn-delete' type='submit' onclick='return deleteFunction()'>Deletar</button>
                        </form>
                    </td></tr>";
            }
            echo "</table>";
        }
        ?>
    </div>
</body>
</html>
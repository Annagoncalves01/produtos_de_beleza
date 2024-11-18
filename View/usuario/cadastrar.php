<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css">
    <title>Cadastrar Usuário</title>
</head>

<body class="cadastro">

    <h1>CADASTRAR-SE</h1>
    <form method="POST">
        <input type="text" name="nome_usuario" placeholder="Nome completo" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="senha" placeholder="Senha" required>
        <input type="password" name="confirmar_senha" placeholder="Confirmar Senha" required>
        <button type="submit">Cadastrar</button>
    </form>

    <?php
    require_once 'C:/aluno2/xampp/htdocs/produtos_de_beleza/config.php';
    require_once 'C:/aluno2/xampp/htdocs/produtos_de_beleza/controller/ProdutoController.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome_usuario = $_POST["nome_usuario"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $confirmar_senha = $_POST["confirmar_senha"];

        if ($senha !== $confirmar_senha) {
            echo "<p style='color: red;'>As senhas não coincidem. Tente novamente.</p>";
        } else {
            $produtoController = new ProdutoController($pdo);

            if ($produtoController->adicionarUsuario($nome_usuario, $email, $senha)) {
                header("Location: /produtos_de_beleza/index.php");
                exit();
            } 
        }
    }
    ?>

    <br><br>
    <a href="../../index.php">VOLTAR</a>

</body>

</html>

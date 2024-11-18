<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cadastrar Usuário</title>
</head>

<body>
    <h1>Cadastrar</h1>
    <form method="POST">
        <input type="text" name="nome_usuario" placeholder="Nome" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="senha" placeholder="Senha" required>
        <button type="submit">Enviar</button>
    </form>

    <?php
    require_once 'C:/aluno2/xampp/htdocs/produtos_de_beleza/config.php';
    require_once 'C:/aluno2/xampp/htdocs/produtos_de_beleza/controller/ProdutoController.php';

    if (isset($_POST["nome_usuario"]) && isset($_POST["email"]) && isset($_POST["senha"])) {
        $produtoController = new ProdutoController($pdo);

        $produtoController->adicionarUsuario($_POST["nome_usuario"], $_POST["email"], $_POST["senha"]);

        header("Location:C:/xampp/htdocs/produtos_de_beleza/index.php");
        exit();
    }
    ?>

    <br><br>

    <a href=".C:/aluno2/xampp/htdocs/produtos_de_beleza/index.php">VOLTAR</a>
</body>

</html>